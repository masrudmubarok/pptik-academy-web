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
	$h['modul1'] = $data['modul1'];
	$h['moduloverview1'] = $data['moduloverview1'];
	$h['judul2'] = $data['judul2'];
	$h['modul2'] = $data['modul2'];
	$h['moduloverview2'] = $data['moduloverview2'];
	$h['judul3'] = $data['judul3'];
	$h['modul3'] = $data['modul3'];
	$h['judul4'] = $data['judul4'];
	$h['modul4'] = $data['modul4'];
	$h['judul5'] = $data['judul5'];
	$h['modul5'] = $data['modul5'];
	$h['judul6'] = $data['judul6'];
	$h['modul6'] = $data['modul6'];
	$h['judul7'] = $data['judul7'];
	$h['modul7'] = $data['modul7'];
	$h['judul8'] = $data['judul8'];
	$h['modul8'] = $data['modul8'];
	$h['judul9'] = $data['judul9'];
	$h['modul9'] = $data['modul9'];
	$h['judul10'] = $data['judul10'];
	$h['modul10'] = $data['modul10'];

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