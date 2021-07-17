<?php
  include "koneksi.php";

 $id_kursus = $_POST['id_kursus'];

  $query = "SELECT * FROM kursus WHERE id_kursus='$id_kursus' ";

  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
  $response = array();
  $response["kursus"] = array();
  while ($data = mysqli_fetch_array($hasil)) {
	$h['id_kursus'] = $data['id_kursus'];
	$h['nama_kursus'] = $data['nama_kursus'];
	$h['harga'] = $data['harga'];
	$h['icon'] = $data['icon'];

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