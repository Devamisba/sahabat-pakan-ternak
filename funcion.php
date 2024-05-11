<?php
function sign_up ($data){

    $nama =$data['nama'];
    $nomor_telepon =$data['nomor telepon'];
    $alamat =$data['alamat'];
    $email =$data['email'];
    $password =$data['password'];
    $role=$data['role'];

$mysqli = new mysqli('localhost', 'root', '', 'sahabat_pakan_ternak');

//sudah ada username 
$result = mysqli_query($mysqli," SELECT * FROM user WHERE nama= '$nama' ");

if(mysqli_fetch_assoc($result )){

    echo "<script>
    alert('Username Sudah Ada!')</script>";

    return false;

}

// Memeriksa apakah koneksi berhasil
if ($mysqli->connect_error) {
    die('Koneksi Gagal: ' . $mysqli->connect_error);
}


$query = "INSERT INTO user VALUES ('$nama','$nomor_telepon','$alamat','$email','$password','$role')";
if ($mysqli->query($query)) {
    header("location:halaman utama.php");

} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();

}
?>