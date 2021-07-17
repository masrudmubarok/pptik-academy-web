<?php
  include "koneksi.php";

 $id_kursus = $_POST['id_kursus'] ;

  $query = "SELECT * FROM kursus WHERE id_kursus='$id_kursus' ";

  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
  $response = array();
  $response["kursus"] = array();
  while ($data = mysqli_fetch_array($hasil)) {
	$h['id_kursus'] = $data['id_kursus'];
	$h['judul1'] = $data['judul1'];
	$h['judul2'] = $data['judul2'];
	$h['judul3'] = $data['judul3'];
	$h['judul4'] = $data['judul4'];
	$h['judul5'] = $data['judul5'];
	$h['judul6'] = $data['judul6'];
	$h['judul7'] = $data['judul7'];
	$h['judul8'] = $data['judul8'];
	$h['judul9'] = $data['judul9'];
	$h['judul10'] = $data['judul10'];

 	array_push($response["kursus"], $h);
  }
	$response["success"] = "1";
	echo json_encode($response);
  }else {
 	$response["success"] = "0";
 	$response["message"] = "Tidak ada data";
	echo json_encode($response);
  }
?>