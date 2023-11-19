<?php
// edit.php

require './config/db.php';

// Cek apakah parameter id ada dalam URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data produk berdasarkan id
    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id='$id'");
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Proses form submission jika form di-submit
        if(isset($_POST['submit'])) {
            $newName = $_POST['new_name'];
            $newPrice = $_POST['new_price'];

            // Update data produk ke dalam database
            $updateQuery = "UPDATE products SET name='$newName', price='$newPrice' WHERE id='$id'";
            mysqli_query($db_connect, $updateQuery);

            // Redirect ke halaman utama setelah update
            header("Location: index.php");
            exit();
        }
    } else {
        // Redirect jika id tidak ditemukan
        header("Location: index.php");
        exit();
    }
} else {
    // Redirect jika tidak ada parameter id dalam URL
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form method="post">
        <label for="new_name">Nama Produk Baru:</label>
        <input type="text" id="new_name" name="new_name" value="<?=$row['name'];?>" required>
        
        <label for="new_price">Harga Baru:</label>
        <input type="text" id="new_price" name="new_price" value="<?=$row['price'];?>" required>

        <input type="submit" name="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
