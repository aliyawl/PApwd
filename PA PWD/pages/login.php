<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body align="center">
    <h1>Login</h1>
    <form action="../proses/cek-login.php" method="post">
        <input type="text" name="username" placeholder="Masukkan username"><br>
        <input type="password" name="password" placeholder="Masukkan password"><br><br>
        <input type="submit" value="Login"><br>
        <a href="register.php">register</a>
    </form>
</body>
</html>