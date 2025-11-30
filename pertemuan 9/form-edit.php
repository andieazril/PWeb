<?php
include("config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>

<h3>Edit Data Siswa</h3>

<form action="proses-edit.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">

    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?php echo $siswa['nama']; ?>" required><br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" required><?php echo $siswa['alamat']; ?></textarea><br><br>

    <label>Jenis Kelamin:</label><br>
    <input type="radio" name="jk" value="Laki-laki" <?php if($siswa['jenis_kelamin']=='Laki-laki') echo 'checked'; ?>> Laki-laki
    <input type="radio" name="jk" value="Perempuan" <?php if($siswa['jenis_kelamin']=='Perempuan') echo 'checked'; ?>> Perempuan<br><br>

    <label>Agama:</label><br>
    <select name="agama" required>
        <?php
        $opsi = ["Islam","Kristen","Hindu","Budha","Konghucu"];
        foreach($opsi as $a){
            $sel = ($siswa['agama'] == $a) ? "selected" : "";
            echo "<option value='$a' $sel>$a</option>";
        }
        ?>
    </select><br><br>

    <label>Sekolah Asal:</label><br>
    <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal']; ?>" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>