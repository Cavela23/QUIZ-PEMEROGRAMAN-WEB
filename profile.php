<?php 
session_start();
if($_SESSION['role'] != 'user') {
    echo 'anda bukan role user';
    header('location:index.php');
}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?php echo $_SESSION['name']?></h1>
    <p><button><a href="show.php">Kelola Barang</a></button></p>
    <p><button><a href="./backend/logout.php">Logout</a></button></p>
</body>
</html>