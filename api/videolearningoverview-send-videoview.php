<?php
  include "koneksi.php";

 $id_kursus = $_POST['id_kursus'] ;

  $query = "SELECT * FROM kursus WHERE kursus.id_kursus='$id_kursus' ";

  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
  $response = array();
  $response["kursus"] = array();
  while ($data = mysqli_fetch_array($hasil)) {
	$h['id_kursus'] = $data['id_kursus'];
	$h['judul1'] = $data['judul1'];
	$h['video1'] = $data['video1'];
	$h['judul2'] = $data['judul2'];
	$h['video2'] = $data['video2'];
	$h['judul3'] = $data['judul3'];
	$h['video3'] = $data['video3'];
	$h['judul4'] = $data['judul4'];
	$h['video4'] = $data['video4'];
	$h['judul5'] = $data['judul5'];
	$h['video5'] = $data['video5'];
	$h['judul6'] = $data['judul6'];
	$h['video6'] = $data['video6'];
	$h['judul7'] = $data['judul7'];
	$h['video7'] = $data['video7'];
	$h['judul8'] = $data['judul8'];
	$h['video8'] = $data['video8'];
	$h['judul9'] = $data['judul9'];
	$h['video9'] = $data['video9'];
	$h['judul10'] = $data['judul10'];
	$h['video10'] = $data['video10'];

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