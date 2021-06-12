<?php

include 'koneksi.php' ;
$transaction_id = $_POST['transaction_id'];
$order_id = $_POST['order_id'];
$payment_type = $_POST['payment_type'];
$gross_amount = $_POST['gross_amount'];
$transaction_time = $_POST['transaction_time'];
$transaction_status = $_POST['transaction_status'];  
$id_siswa = $_POST['id_siswa'];
$id_kursus = $_POST['id_kursus'];

$Sql_Query = "insert into ambil_kursus (transaction_id,order_id,payment_type,gross_amount,transaction_time,transaction_status,id_siswa,id_kursus) values ('$transaction_id','$order_id','$payment_type','$gross_amount','$transaction_time','$transaction_status','$id_siswa','$id_kursus')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>