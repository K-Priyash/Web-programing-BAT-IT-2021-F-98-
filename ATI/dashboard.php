<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}


$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #34a853;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .dashboard {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #34a853;
        }
        p {
            color: #333;
            text-align: left; 
        }
        
        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #34a853;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        a.button:hover {
            background-color: #34a853;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="dashboard"><h2>HELLO - <?php echo $email; ?>!</h2><br>
        <h2>Welcome to the Advanced Technological Institute - Batticaloa</h2><br>
        <p><a href="logout.php" class="button">Logout</a></p>
    </div>
</body>
</html>
