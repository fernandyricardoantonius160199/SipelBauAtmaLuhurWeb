<?php
	include '../config/koneksi.php';
		
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_ruangan * ORDER BY id ASC");
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
		
	}
    
	echo json_encode($json);
	
	mysqli_close($koneksi);

?>