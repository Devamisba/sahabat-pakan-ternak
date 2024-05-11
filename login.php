<?php
$mysqli = new mysqli('localhost', 'root', '', 'sahabat_pakan_ternak');

require 'funcion.php';

if(isset($_POST['sign_up'])){

    if(register($_POST)> 0){
        echo "<script>
        alert('User Baru Berhasil Ditambahkan!')</script>";
    }
    else{
        echo mysqli_error($mysqli );
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="container">
            <div class="form_area">
                <p class="title">SIGN UP</p>
                <form action="">
                    <div class="form_group">
                        <label class="sub_title" for="name">Nama</label>
                        <input placeholder="Masukkan Nama Lengkap" name ="nama" class="form_style" type="text">
                    </div>
                    <div class="form_group">
                        <label class="sub_title" for="nomor_telepon">Nomor Telepon</label>
                        <input placeholder="Masukkan Nomor Telepon" name ="nomor_telepon" class="form_style" type="text">
                    </div>
                    <div class="form_group">
                        <label class="sub_title" for="alamat">Alamat</label>
                        <input placeholder="Masukkan Alamat" name ="alamat" class="form_style" type="text">
                    </div>
                    <div class="form_group">
                        <label class="sub_title" for="email">Email</label>
                        <input placeholder="Masukkan email" id="email" name ="email" class="form_style" type="email">
                    </div>
                    <div class="form_group">
                        <label class="sub_title" for="password">Password</label>
                        <input placeholder="Masukkan password" id="password" name ="password" class="form_style" type="password">
                    </div>
                    <div>
                        <button class="btn" name ="sign_up" type="submit">SIGN UP</button>
                        <p>Tidak Punya Akun? <a class="link" href="">Login Disini!</a></p><a class="link" href="">
                    </a></div><a class="link" href="">
                
            </a></form></div><a class="link" href="">
        </a>
        </div>
    
</body>
</html>