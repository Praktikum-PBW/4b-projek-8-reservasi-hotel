<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");

    if ($query) {
        //Cara 1 : header("Location: index.php?page=cakor");

         //Cara 2
        echo("<script>window.location.href='index.php?page=user';</script>");
    } else {
        echo "Gagal";
    }
    }echo("<script>window.location.href='index.php?page=user';</script>");

