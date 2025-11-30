<?php
include("config.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
            VALUES ('$nama','$alamat','$jk','$agama','$sekolah_asal')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: list-siswa.php");
    } else {
        die("Gagal menyimpan data: ".mysqli_error($conn));
    }

} else {
    die("Akses dilarang...");
}
?>
