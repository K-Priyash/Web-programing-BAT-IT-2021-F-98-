<?php
// Start the session
session_start();

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

// Retrieve login form data
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database to validate credentials
$sql = "SELECT * FROM Lecturer WHERE Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify password
    if (password_verify($password, $row['Password'])) {
        // Password is correct, start a session
        $_SESSION['email'] = $email;
        // Redirect to dashboard.php
        header("Location: dashboard.php");
    } else {
        // Password is incorrect, redirect to login.php with an error message
        header("Location: login.php?login_error=1");
    }
} else {
    // User not found, redirect to login.php with an error message
    header("Location: login.php?login_error=1");
}

// Close the database connection
$stmt->close();
$conn->close();
?>
