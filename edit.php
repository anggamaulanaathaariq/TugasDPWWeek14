<?php
    require 'functions.php';
    // menggunakan method get untuk mengambil id yang telah terseleksi oleh user dan dimasukkan
    // ke dalam variabel baru yaitu $id
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data</title>
    
</head>
<body>

<h1> Update Data Mahasiswa </h1>
    <form action="" method="post" enctype="multipart/form-data">
    <ul>
    <li>
    <input type="hidden" name="id" value="<?= $mhs[id] ?>">
    <input type="hidden" name="GambarLama" value="<?= $mhs[Gambar]; ?>"> 
    </li>
    <li>
        <!--  for pada label terhubung dengan id jadi jika label nama diklik maka textfield nama akan aktif juga-->
        <label for="Nama">Nama</label>
        <!-- untuk pengisian name besar ekcilnya harus sesuai dengan fieldnya-->
        <input type="text" name="Nama" id="Name" value="<?= $mhs[Nama]; ?>">
    </li>
        <li>        
            <label for="Nim">Nim</label>
            <input type="text" name="Nim" id="Nim" required value="<?= $mhs[Nim]; ?>">
        </li>
        <li>
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email" required value="<?= $mhs[Email]; ?>">
        </li>
        <li>
            <label for="Jurusan">Jurusan</label>
            <input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs[Jurusan]; ?>">
        </li>
        <li>
            <label for="Gambar">Gambar :</label>
            <img src="image/<?= $mhs[Gambar];?>" alt="" height="100" width="100"><br>
            <input type="file" name="Gambar" id="Gambar" >
        </li>
        <li>
            <td><button type="submit" name="submit"> Update </button></td>
        </li>
        </ul>
        </form>  
</body>
</html>