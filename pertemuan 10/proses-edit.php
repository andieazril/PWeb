<?php
include("config.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    if($_FILES['foto_baru']['name'] != "") {

        $foto_name = $_FILES['foto_baru']['name'];
        $foto_tmp  = $_FILES['foto_baru']['tmp_name'];
        $ext       = pathinfo($foto_name, PATHINFO_EXTENSION);
        $new_name  = uniqid() . "." . $ext;

        move_uploaded_file($foto_tmp, "foto/" . $new_name);

        $sql = "UPDATE calon_siswa SET 
                nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin',
                agama='$agama', sekolah_asal='$sekolah_asal', foto='$new_name'
                WHERE id=$id";

    } else {
        $sql = "UPDATE calon_siswa SET 
                nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin',
                agama='$agama', sekolah_asal='$sekolah_asal'
                WHERE id=$id";
    }

    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
}
?>