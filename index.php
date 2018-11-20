<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    // tombol cari ditekkan
    // cari pada line 7 adalah name dari button
    if (isset($_POST["cari"])) {

        // cari line 10 adalah function cari dan keyword adalah name dari inputan text
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Daftar Mahasiswa</a></li>
                <li><a href="tambah_data.php">Tambah Data Mahasiswa</a></li>
                <li><a href="registrasi.php">Registrasi Mahasiswa</a></li>
            </ul>
    </nav>
<h1> Daftar Mahasiswa</h1>
<form action="" method="post"> 
    <!-- autofocus atribut pada html 5 yang digunakan untuk memberikan tanda pertama kali ke inputan pada saat page di reload -->
    <!-- placeholder atribut yang digunakan untuk menampilkan tulisan pada textbox -->
    <!-- autocomplete digunakan agar history pencarian dari user lain tidak ada -->
    <input type = "text" name = "keyword" size = "40" autofocus placeholder = "masukkan keyword pencarian" autocomplete = "off">
    <button type = "submit" name = "cari"> cari </button>
</form>
<br>
<a href = "tambah.php"> Tambah Data Mahasiswa</a>
<table class="table table-striped">
<tr>
<thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
</tr>
<?php $i = 1?>
<!--  kita buat contoh data static -->
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= $i; ?></td>
    <td><?= $row["Nama"]; ?></td>
    <td><?= $row["Nim"]; ?></td>
    <td><?= $row["Email"]; ?></td>
    <td><?= $row["Jurusan"]; ?></td>
    <td><img src = "image/<?php echo $row["Gambar"]; ?>" alt ="" height = "100" width = "100" srcset = ""></td>
    <td>
        <a href = "edit.php?id=<?php echo $row["id"];?>">Edit</a>
        <a href = "hapus.php?id=<?php echo $row["id"];?>"onclick="return confirm('Apakah data ini akan dihapus?')">Hapus</a>
    </td>
</tr>       
<?php $i++ ?>
<?php endwhile;?>

</body>
</html>