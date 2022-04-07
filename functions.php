<?php
$host       = 'localhost';
$user       = 'root';
$password   = '';
$db         = 'reservasi_hotel';
$conn = mysqli_connect($host, $user, $password, $db) or die(mysql_error());
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows  = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id){
    global $conn;
    $result = mysqli_query($conn, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    mysqli_query($conn, "UPDATE user set
    email = '$_POST[email]',
    nama = '$_POST[nama]',
    password = '$_POST[password]' 
    WHERE id = $_POST[id]");
     }

$mahasiswa = query("SELECT * FROM user");
?>