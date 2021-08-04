<?php date_default_timezone_set("Asia/Jakarta");

include '../config/koneksi.php';
include 'autokode.php';

$nama_user = $_POST['nama_user'];
$email_user = $_POST['email_user'];
$no_hp_user = $_POST['no_hp_user'];
$user_user = $_POST['user_user'];
$pass_user = $_POST['pass_user'];
$tahun = date('dmY');
$id_user = otomatis("tbl_user", "id_user", "4", "USR$tahun");

	if ((empty($nama_user))) { 
		$response["error"] = 0;
        $response["error_msg"] = "Nama Tidak Boleh Kosong";
        echo json_encode($response);
	} else if ((empty($email_user))){
		$response["error"] = 0;
        $response["error_msg"] = "E - mail Tidak Boleh Kosong";
        echo json_encode($response);
	} else if ((empty($no_hp_user))){
		$response["error"] = 0;
        $response["error_msg"] = "No. Handphone Tidak Boleh Kosong";
        echo json_encode($response);
	} else if ((empty($user_user))){
		$response["error"] = 0;
        $response["error_msg"] = "Username Tidak Boleh Kosong";
        echo json_encode($response);
	} else if ((empty($pass_user))){
		$response["error"] = 0;
        $response["error_msg"] = "Password Tidak Boleh Kosong";
        echo json_encode($response);
	} else {
		if (!empty($nama_user) && $email_user && $no_hp_user && $user_user && $pass_user){
			$num_rows = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE email_user='".$email_user."'"));

	if ($num_rows == 0){
			$insert = mysqli_query($koneksi, "INSERT INTO tbl_user(nama_user,id_user,pass_user,email_user,no_hp_user,user_user) 
				VALUES('$nama_user','$id_user','$pass_user','$email_user','$no_hp_user','$user_user')");  

	if($insert){  
		  //$response['message'] = 'Registrasi Berhasil';
			$response['error'] = FALSE;
			echo json_encode($response);
	} else {
		$response["error"] = TRUE;
		$response["error_msg"] = "Registrasi Gagal";
		echo json_encode($response);
		}
	} else {
		$response["error"] = TRUE;
		$response["error_msg"] = "E-mail Sudah Ada";
		echo json_encode($response);
		}
	}
}

mysqli_close($koneksi);

?>