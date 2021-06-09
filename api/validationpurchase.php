<?php
  include "koneksi.php";
  $id_siswa = $_GET['id_siswa'];
  $id_kursus = $_GET['id_kursus'];
//   $username = 'masrud';
//   $password = 'masrud';
  $query = "select * from ambil_kursus where id_siswa='$id_siswa' and id_kursus='$id_kursus' ";
  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
    $response = array();
    $response["validation"] = array();
    while ($data = mysqli_fetch_array($hasil)) {
    	$h['id_siswa'] = $data['id_siswa'] ;
	$h['id_kursus'] = $data['id_kursus'] ;
    	$h['tanggal_daftar'] = $data['tanggal_daftar'];
	$h['status_ujian'] = $data['status_ujian'] ;
     	array_push($response["validation"], $h);
    }
	$response["success"] = "1";
	echo json_encode($response);
  }else {
   	$response["success"] = "0";
   	$response["message"] = "Tidak ada data";
  	echo json_encode($response);
  }
?>
