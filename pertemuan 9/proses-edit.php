<?php
include("config.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "UPDATE calon_siswa SET
                nama = '$nama',
                alamat = '$alamat',
                jenis_kelamin = '$jk',
                agama = '$agama',
                sekolah_asal = '$sekolah_asal'
            WHERE id = $id";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: list-siswa.php");
    } else {
        die("Gagal memperbarui data: ".mysqli_error($conn));
    }

} else {
    die("Akses dilarang...");
}
?>
