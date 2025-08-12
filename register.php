<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #1fa9ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        button:hover {
            background-color: #1483c9;
        }
    </style>
</head>
<body>

<form action="server.php" method="post">
    <h2>User Information</h2>
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Father Name" name="father_name" required>
    <input type="text" placeholder="Mother Name" name="mother_name" required>
    <textarea placeholder="Present Address" rows="3" name="address" required></textarea>
    <input type="tel" placeholder="Mobile No." name="phone" required>
    <input type="email" placeholder="Email" name="email" required>
    <input type="password" placeholder="Password" name="password" required>
    <button type="submit">Register</button>
</form>

</body>
</html>
