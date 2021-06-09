<?php

include 'koneksi.php' ; 
$nama_siswa = $_POST['nama_siswa'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$kota = $_POST['kota'];
$negara = $_POST['negara'];

$password = password_hash($password, PASSWORD_DEFAULT);

$Sql_Query = "insert into siswa (nama_siswa,username,password,email,kota, negara) values ('$nama_siswa','$username','$password','$email','$kota','$negara')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>