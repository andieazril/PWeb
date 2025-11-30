<?php
$server = "localhost:3310";
$user = "root";
$password = "";
$database = "pendaftaran_siswa";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>
