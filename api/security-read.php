<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $id_siswa = $_POST['id_siswa'];

    require_once 'koneksi.php';

    $sql = "SELECT * FROM siswa WHERE id_siswa='$id_siswa' ";

    $response = mysqli_query($con, $sql);

    $result = array();
    $result['read'] = array();

    if( mysqli_num_rows($response) === 1 ) {
        
        if ($row = mysqli_fetch_assoc($response)) {
 
             $h['username']            = $row['username'] ;
             $h['password']            = $row['password'] ;
 
             array_push($result["read"], $h);
 
             $result["success"] = "1";
             echo json_encode($result);
        }
 
   }
 
 }else {
 
     $result["success"] = "0";
     $result["message"] = "Error!";
     echo json_encode($result);
 
     mysqli_close($con);
 }
 
 ?>