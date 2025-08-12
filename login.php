<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <form action="login_process.php" method="post" style="max-width: 400px; margin: auto; padding:20px; font-family:Arial;">
        <h2 style="text-align:center;">Login</h2>
        <input type="email" name="email" placeholder="Email" required style="width:100%; padding:10px; margin-bottom:10px;"><br>
        <input type="password" name="password" placeholder="Password" required style="width:100%; padding:10px; margin-bottom:10px;"><br>
        <button type="submit" style="width:100%; padding:10px; background:#1fa9ff; color:#fff; border:none; border-radius:5px; cursor:pointer;">Login</button>
        <p style="text-align:center; margin-top:15px;">Don't have an account? <a href="register.php">Register here</a></p>
    </form>
</body>
</html>
