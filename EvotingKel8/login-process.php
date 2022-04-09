<?php
if (isset($_POST['login'])) {
    session_start();
    include 'libraries/koneksidatabase.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' && password='$password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['level'] = $data['level'];
        header("Location: back/index.php");
  } 
    // else {
    //     // $_SESSION['error'] = "Username atau password salah";
    //     header("Location: login.php"); 
    // }
}
