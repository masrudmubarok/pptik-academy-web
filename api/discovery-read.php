<?php
  include "koneksi.php";

  $query = "select * from kursus, tutor where kursus.id_tutor = tutor.id_tutor";
  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
  $response = array();
  $response["kursus"] = array();
  while ($data = mysqli_fetch_array($hasil)) {
	$h['id_kursus'] = $data['id_kursus'] ;
	$h['nama_kursus'] = $data['nama_kursus'] ;
	$h['deskripsi'] = $data['deskripsi'] ;
	$h['nama_tutor'] = $data['nama_tutor'] ;
	$h['harga'] = $data['harga'] ;
	$h['icon'] = $data['icon'];
	$h['jumlah_video'] = $data['jumlah_video'];
	$h['jumlah_modul'] = $data['jumlah_modul'];

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