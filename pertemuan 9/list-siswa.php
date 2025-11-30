<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>

<h3>Siswa yang sudah mendaftar</h3>
<a href="form-daftar.php">Tambah Baru</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Aksi</th>
    </tr>

    <?php
    $sql = "SELECT * FROM calon_siswa";
    $query = mysqli_query($conn, $sql);
    $no = 1;

    while ($siswa = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['agama']."</td>";
        echo "<td>".$siswa['sekolah_asal']."</td>";
        echo "<td>
                <a href='form-edit.php?id=".$siswa['id']."'>Edit</a> |
                <a href='hapus.php?id=".$siswa['id']."' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
              </td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
