<?php

include("config.php");

if(isset($_POST['daftar'])) {

    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];
    $sekolah_asal   = $_POST['sekolah_asal'];

    $foto_name = $_FILES['foto']['name'];
    $foto_tmp  = $_FILES['foto']['tmp_name'];
    $folder    = "foto/";

    $ext = pathinfo($foto_name, PATHINFO_EXTENSION);
    $new_name = uniqid() . "." . $ext;

    move_uploaded_file($foto_tmp, $folder . $new_name);

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, foto) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '$new_name')";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>