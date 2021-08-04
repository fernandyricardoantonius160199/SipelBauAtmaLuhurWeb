<?php
	include '../config/koneksi.php';
		
	$user_user = $_POST["user_user"];
	$pass_user = $_POST["pass_user"];
	
	if ((empty($user_user)) || (empty($pass_user))) { 
		$response["error"] = 0;
        $response["error_msg"] = "Username Atau Password Kosong";
        echo json_encode($response);
	}
	
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE user_user='$user_user' AND pass_user='$pass_user'");
	
	$row = mysqli_fetch_array($query);
	
	if ($row != false) {
        // user ditemukan
        $response["error"] = FALSE;
		//$response["error_msg"] = "Berhasil Login.";
        $response["user_user"] = $row["user_user"];
		$response["tbl_user"]["id_user"] = $row["id_user"];
		$response["tbl_user"]["nama_user"] = $row["nama_user"];
		$response["tbl_user"]["email_user"] = $row["email_user"];
		$response["tbl_user"]["no_hp_user"] = $row["no_hp_user"];
        $response["tbl_user"]["user_user"] = $row["user_user"];
        $response["tbl_user"]["pass_user"] = $row["pass_user"];
        echo json_encode($response);
		
	} else { 
		$response["error"] = TRUE;
        $response["error_msg"] = "Username Atau Password Salah";
        echo json_encode($response);
	}
	
	mysqli_close($koneksi);

?>