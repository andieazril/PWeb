<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" required />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama" required>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katholik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" required />
        </p>

        <p>
            <label for="foto">Pas Foto:</label>
            <input type="file" name="foto" accept="image/*" required>
        </p>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

</body>
</html>