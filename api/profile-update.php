<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $email = $_POST['email'];
    $kota = $_POST['kota'];
    $negara = $_POST['negara'];

    require_once 'koneksi.php';

    $sql = "UPDATE siswa SET nama_siswa='$nama_siswa',email='$email',kota='$kota',negara='$negara' WHERE id_siswa='$id_siswa'";

    if(mysqli_query($con, $sql)) {

          $result["success"] = "1";
          $result["message"] = "success";

          echo json_encode($result);
          mysqli_close($conn);
      }
  }

else{

   $result["success"] = "0";
   $result["message"] = "error!";
   echo json_encode($result);

   mysqli_close($conn);
}

?>