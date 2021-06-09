<?php

include 'koneksi.php' ; 
$id_siswa = $_POST['id_siswa'];
$id_kursus = $_POST['id_kursus'];
$tanggal_daftar = $_POST['tanggal_daftar'];

$Sql_Query = "insert into ujian (id_siswa,id_kursus,tanggal_daftar,status_ujian,status_sertifikat,no_sertifikat) values ('$id_siswa','$id_kursus','$tanggal_daftar','belum','belum','null')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>