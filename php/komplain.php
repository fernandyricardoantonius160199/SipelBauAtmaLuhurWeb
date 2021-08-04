<?php date_default_timezone_set("Asia/Jakarta");

include '../config/koneksi.php';
include 'autokode.php';

class emp{}

$image = $_POST['image'];
$id_user = $_POST['id_user'];
$isi_komplain = $_POST['isi_komplain'];
$jenis_komplain = $_POST['jenis_komplain'];
$kd_ruangan = $_POST['kd_ruangan'];
$jam = date('H:i:s');
$tgl = date('Y-m-d');
$tahun = date('dmY');
$kd_lap = otomatis("tbl_komplain", "kd_komplain", "4","KOM$tahun");

if (empty($isi_komplain)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Detail Laporan Tidak Boleh Kosong"; 
		die(json_encode($response));
	} else {

		$random = random_word(20);
		
		$path = "".$random.".jpg";
		
$insert = mysqli_query($koneksi, "INSERT INTO tbl_komplain(id_user,kd_komplain,jam_komplain,tanggal_komplain,isi_komplain,jenis_komplain,kd_ruangan,foto_komplain) 
VALUES('$id_user','$kd_lap','$jam','$tgl','$isi_komplain','$jenis_komplain','$kd_ruangan','$path')");  

if($insert){  
file_put_contents($path,base64_decode($image));

	//$response['message'] = 'Laporan Berhasil Dikirim';
//	$response['error'] =FALSE;
$response = new emp();
	//$response->message = "Successfully Uploaded";
	$response->success = 1;
	echo json_encode($response);
	
} else {
	//$response["error"] = TRUE;
	$response = new emp();
	$response->message ="Laporan Gagal Dikirim";
	$response["error_msg"] = "Laporan Gagal Dikirim";
	$response->success = 0;
	echo json_encode($response);
	}
}
	

function random_word($id = 20){
		$pool = '1234567890abcdefghijkmnpqrstuvwxyz';
		
		$word = '';
		for ($i = 0; $i < $id; $i++){
			$word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		return $word; 
	
	}

mysqli_close($koneksi);



?>