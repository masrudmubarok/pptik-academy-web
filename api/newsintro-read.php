<?php
  include "koneksi.php";

  $query = "select * from berita order by id_berita DESC";
  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
  $response = array();
  $response["berita"] = array();
  while ($data = mysqli_fetch_array($hasil)) {
	$h['id_berita'] = $data['id_berita'] ;
	$h['judul_berita'] = $data['judul_berita'] ;
	$h['keterangan'] = $data['keterangan'] ;
	$h['tanggal_berita'] = $data['tanggal_berita'] ;
	$h['link_berita'] = $data['link_berita'] ;

 	array_push($response["berita"], $h);
  }
	$response["success"] = "1";
	echo json_encode($response);
  }else {
 	$response["success"] = "0";
 	$response["message"] = "Tidak ada data";
	echo json_encode($response);
  }
?>