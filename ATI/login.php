<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #34a853;
        }
        form {
            width: 300px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }
        button.login {
            background-color: #34a853;
            color: #ffffff;
        }
        button.register {
            background-color: #34a853;
            color: #ffffff;
        }
        button a {
            text-decoration: none;
            color: inherit;
        }
        h2 {
            text-align: center;
            color: #34a853;
        }
    </style>
</head>
<body>
    
    <form action="login_process.php" method="post">
    <h2>Lecturer Login</h2>
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button class="login" type="submit">Login</button>
        <br>
        <button class="register"><a href="register.php">Register</a></button>
    </form>
</body>
</html>
