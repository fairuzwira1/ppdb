<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi ppdb by programming</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="images/WebPro10.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>webro</h1>
        <h2>Penerimaan peserta didik baru</h2>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <h4>Formulir PPDB</h4>
<div> 
    <form action="proses-pendaftaran.php" method="post">
<div>
    <label for=>Nama Lengkap</label>
    <input type="text" name="nama">
</div>
<div>
    <label for=>Alamat Lengkap</label>
    <textarea name="alamat" cols="30" rows="10"></textarea>
</div>
<div>
    <label for=>Jenis Kelamin</label>
    <input type="radio" name"jenis_kelamin" value="Laki-Laki">Laki-laki
    <input type="radio" name"jenis_kelamin" value="Perempuan">Perempuan
</div>
<div>
    <label for=>Agama</label>
    <select name="agama">
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Katholik">Katholik</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
<option value="Konghucu">Konghucu</option>
    </select>
</div>
<div>
     <label for="">sekolah asal</label>
     <input type=text" name"sekolah_asal">
</div>
<div>
    <input type="reset">
    <input type="submit" value="simpan" name="simpan">
</div>
    </form>
</div>
    <foother>
        <hr>
         <i>Dibuat dengan semangat &copy;by <b>std progweb</b></i>
    </footer>
</body>
</html>