<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
</head>
<body>

    <h3>Formulir Pendaftaran Siswa Baru</h3>

    <form action="proses-pendaftaran.php" method="POST">

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan" required> Perempuan<br><br>

        <label>Agama:</label><br>
        <select name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
        </select><br><br>

        <label>Sekolah Asal:</label><br>
        <input type="text" name="sekolah_asal" required><br><br>

        <button type="submit" name="daftar">Daftar</button>
    </form>

</body>
</html>
