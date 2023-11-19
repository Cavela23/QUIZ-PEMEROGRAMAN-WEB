<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pages</title>
</head>
<body>
    <h1>Login</h1>
    <form action="./backend/login.php" method="post">
        <input type="email" name="email" placeholder="masukkan email anda">
        <input type="password" name="password" placeholder="masukkan password anda">
        <input type="submit" value="login" name="submit">
        <a href="register.php">tidak punya akun?</a>
    </form>

</body>
</html>