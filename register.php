<?php
require 'functions.php';

if(isset($_POST['register']))
{
    if(registrasi($_POST>0)
    {
        echo "
        <style>
        alert('user berhasil ditambahkan');
        </style>
        ";
    }else
    {
        echo mysqli_error($conn);
    }
}
?>