<?php 
    require 'functions.php';

    if (isset($_POST['register'])) {
        if (registrasi($_POST) > 0) {
            echo "
                <style>
                    alert('user berhasil ditambahkan');
                </style>
                ";
        }
        else {
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Form Registrasi</title>
    <style>
    label {
        display:block;
    }
    </style>
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
    <h1 align=center>Halaman Registrasi</h1>
    <center><h5> SELAMAT DATANG DI WEB POLITEKNIK NEGERI MALANG </h5></center>
    <table align=center>
    <form action="" method="post">
        <ul>
            <tr>
            <td><label for="username">Username :</label></td>
            <td><input type="text" name="username" id="username" ></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td><label for="password2">Konfirmasi Password :</label></td>
                <td><input type="password" name="password2" id="password2" required2 ></td>
            </tr>
            <tr>
                <td><button type="submit" name="register">Registrasi</button></td>
            </tr>
        </ul>
    </form>
</body>
</html>