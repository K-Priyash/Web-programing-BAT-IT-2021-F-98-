<?php
// Connect to the database

$servername = "localhost";  // Update with your actual MySQL server hostname or IP address
$username = "root";
$password = "";
$dbname = "ATIWEB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$designation = $_POST['designation'];
$courseID = $_POST['course'];
$gender = $_POST['gender'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Perform data validation
if (empty($name) || empty($email) || empty($designation) || empty($courseID) || empty($gender) || empty($password)) {
    die("All fields are required. Please go back and fill in the missing information.");
}

// Insert data into the Lecturer table using a prepared statement
$stmt = $conn->prepare("INSERT INTO Lecturer (Name, Email, Designation, CourseID, Gender, Password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $name, $email, $designation, $courseID, $gender, $password);

if ($stmt->execute()) {
    // Redirect to login.php with a success message
    header("Location: login.php?registration_success=1");
} else {
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>
