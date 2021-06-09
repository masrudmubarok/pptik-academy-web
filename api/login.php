<?php
  include "koneksi.php";
  $username = $_GET['username'];
  $password = $_GET['password'];
//   $username = 'masrud';
//   $password = 'masrud';
  $query = "select * from siswa where username='$username' and password='$password' ";
  $hasil = mysqli_query($con, $query);
  if (mysqli_num_rows($hasil) > 0) {
    $response = array();
    $response["login"] = array();
    while ($data = mysqli_fetch_array($hasil)) {
    	$h['nama_siswa'] = $data['nama_siswa'] ;
	$h['username'] = $data['username'] ;
    	$h['password'] = $data['password'];
	$h['email'] = $data['email'] ;
	$h['kota'] = $data['kota'] ;
    	$h['negara'] = $data['negara'];
	$h['id_siswa'] = $data['id_siswa'] ;
     	array_push($response["login"], $h);
    }
	$response["success"] = "1";
	echo json_encode($response);
  }else {
   	$response["success"] = "0";
   	$response["message"] = "Tidak ada data";
  	echo json_encode($response);
  }
?>
