<?php
require './config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id='$id'");
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
     
        $deleteQuery = "DELETE FROM products WHERE id='$id'";
        mysqli_query($db_connect, $deleteQuery);

       
        if (!empty($row['image']) && file_exists($row['image'])) {
            unlink($row['image']);
        }

       
        header("Location: index.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
