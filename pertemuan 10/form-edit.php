<?php
include("config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit</title>
</head>

<body>
    <header>
        <h3>Form Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
        <fieldset>

        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">

        <p>
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>" required>
        </p>

        <p>
            <label>Alamat:</label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>

        <p>
            <label>Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"
                <?php echo ($siswa['jenis_kelamin']=="laki-laki") ? "checked" : "" ?>> Laki-laki</label>

            <label><input type="radio" name="jenis_kelamin" value="perempuan"
                <?php echo ($siswa['jenis_kelamin']=="perempuan") ? "checked" : "" ?>> Perempuan</label>
        </p>

        <p>
            <label>Agama:</label>
            <select name="agama">
                <option <?php if($siswa['agama']=="Islam") echo "selected"?>>Islam</option>
                <option <?php if($siswa['agama']=="Kristen") echo "selected"?>>Kristen</option>
                <option <?php if($siswa['agama']=="Katholik") echo "selected"?>>Katholik</option>
                <option <?php if($siswa['agama']=="Hindu") echo "selected"?>>Hindu</option>
                <option <?php if($siswa['agama']=="Buddha") echo "selected"?>>Buddha</option>
                <option <?php if($siswa['agama']=="Konghucu") echo "selected"?>>Konghucu</option>
            </select>
        </p>

        <p>
            <label>Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>">
        </p>

        <p>
            <label>Foto Lama:</label><br>
            <img src="foto/<?php echo $siswa['foto']; ?>" width="120">
        </p>

        <p>
            <label>Ganti Foto (opsional):</label>
            <input type="file" name="foto_baru" accept="image/*">
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>
    </form>

</body>
</html>