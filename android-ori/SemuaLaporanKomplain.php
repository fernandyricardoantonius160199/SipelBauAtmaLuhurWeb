<?php

	$HostName ="localhost";
	$HostUser = "root";
	$HostPass = "";
	$DatabaseName = "db_sipel_sarpras_bau_al";
	$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
	$respon=array();
	$result=mysqli_query($con,"SELECT * FROM tbl_komplain") or die (mysqli_error());
	
	if(mysqli_num_rows($result)>0)
	{
		$respon["tempmember"] = array();
			while ($row = mysqli_fetch_array($result))
			{
				$tempmember = array();
				$tempmember["kd_komplain"] = $row["kd_komplain"];
				$tempmember["tanggal_komplain"] = $row["tanggal_komplain"];
				$tempmember["jenis_komplain"] = $row["jenis_komplain"];
				$tempmember["status_komplain"] = $row["status_komplain"];
		
				array_push($respon["tempmember"],$tempmember);
			}
			$respon["sukses"]=1;
			echo json_encode($respon);
	}
	else
	{
		$respon["sukses"]=0;
		$respon["pesan"]="Tidak Ada Riwayat";
		echo json_encode($respon);
	}
	mysqli_close($con);
	?>