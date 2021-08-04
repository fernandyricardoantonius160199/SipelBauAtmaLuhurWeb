<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$image = $_POST['image'];
                $isi = $_POST['isi'];
				 $spin_jenis = $_POST['spin_jenis'];
				  $spin_tempat = $_POST['spin_tempat'];
		
	define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_sipel_sarpras_bau_al');
		
		$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		
		$path = "uploads/$name.png";
		
		$actualpath = "http://192.168.100.158/$path";
		
		$sql = "INSERT INTO tbl_komplain (foto_komplain, isi_komplain,jenis_komplain,kd_ruangan) VALUES ('$image','$isi','$spin_jenis','$spin_tempat')";
		
		if(mysqli_query($conn,$sql)){
			file_put_contents($path,base64_decode($image));
			echo "Successfully Uploaded";
		}
		
		mysqli_close($conn);
	}else{
		echo "Error";
	}