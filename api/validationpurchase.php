<?php
  include "koneksi.php";
  $id_siswa = $_POST['id_siswa'];
  $id_kursus = $_POST['id_kursus'];
//   $id_siswa = 4;
//   $id_kursus = 1;
  $query = "select * from ambil_kursus where id_siswa='$id_siswa' and id_kursus='$id_kursus' ";
  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
    $response = array();
	$response["success"] = "1";
	$response["id_siswa"] = $id_siswa;
	$response["id_kursus"] = $id_kursus;
	echo json_encode($response);
  }else {
   	$response["success"] = "0";
   	$response["message"] = "Tidak ada data";
   	$response["id_siswa"] = $id_siswa;
	$response["id_kursus"] = $id_kursus;
  	echo json_encode($response);
  }
?>
