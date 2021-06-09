<?php

include 'koneksi.php' ; 
$id_siswa = $_POST['id_siswa'];
$id_kursus = $_POST['id_kursus'];
$tanggal_ambilkursus = $_POST['tanggal_ambilkursus'];

$Sql_Query = "insert into ambil_kursus (id_siswa,id_kursus,status_kursus,tanggal_ambilkursus) values ('$id_siswa','$id_kursus','pending','$tanggal_ambilkursus')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>