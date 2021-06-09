<?php
  include "koneksi.php";

 $id_kursus = $_POST['id_kursus'];

  $query = "SELECT * FROM siswa, ambil_kursus, kursus WHERE siswa.id_siswa = ambil_kursus.id_siswa AND ambil_kursus.id_kursus = kursus.id_kursus AND kursus.id_kursus='$id_kursus' ";

  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
  $response = array();
  $response["kursus"] = array();
  while ($data = mysqli_fetch_array($hasil)) {
	$h['id_kursus'] = $data['id_kursus'];
	$h['nama_kursus'] = $data['nama_kursus'];
	$h['deskripsi'] = $data['deskripsi'];
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