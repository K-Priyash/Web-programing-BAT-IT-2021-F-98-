<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color:#34a853 ;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #34a853;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #34a853;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <form action="register_process.php" method="post">
        <h2>Lecturer Registration</h2>

        <label for="name">Name in full:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="designation">Designation:</label>
        <select name="designation" required>
            <option value="Assistant Lecturer">Assistant Lecturer</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Senior Lecturer I">Senior Lecturer I</option>
            <option value="Senior Lecturer II">Senior Lecturer II</option>
        </select>

        <label for="course">Course:</label>
        <select name="course" required>
            <option value="1">HNDA</option>
            <option value="2">HNDIT</option>
            <option value="3">HNDE</option>
        </select>

        <label for="gender">Gender:</label>
        <label><input type="radio" name="gender" value="Male" required> Male</label>
        <label><input type="radio" name="gender" value="Female" required> Female</label>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>
