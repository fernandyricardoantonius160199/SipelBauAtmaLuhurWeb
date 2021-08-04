<?php date_default_timezone_set("Asia/Jakarta");

include '../config/koneksi.php';
include 'autokode.php';

$tahun = date('dmY');
$kd_komplain = otomatis("tbl_komplain", "kd_komplain", "4", "KOM$tahun");
$id_user = $_POST['id_user'];
$jenis_komplain = $_POST['jenis_komplain'];
$isi_komplain = $_POST['isi_komplain'];
$jam_komplain = date('H:i:s');
$tanggal_komplain = date('Y-m-d');
$kd_ruangan = $_POST['kd_ruangan'];
$foto_komplain = $_POST['foto_komplain'];
//$status_komplain = $_POST['status_komplain'];


	//if ((empty($jenis_komplain))) { 
		//$response["error"] = 0;
        //$response["error_msg"] = "Jenis Komplain Tidak Boleh Kosong";
      //  echo json_encode($response);
	//  } else if ((empty($isi_komplain))){
		//$response["error"] = 0;
        //$response["error_msg"] = "Isi Komplain Tidak Boleh Kosong";
        //echo json_encode($response);
	//} else if ((empty($kd_ruangan))){
		//$response["error"] = 0;
        //$response["error_msg"] = "Ruangan Tidak Boleh Kosong";
        //echo json_encode($response);
	//} else if ((empty($foto_komplain))){
		//$response["error"] = 0;
        //$response["error_msg"] = "Foto Tidak Boleh Kosong";
        //echo json_encode($response);
	
	if ($num_rows == 0){
			$insert = mysqli_query($koneksi, "INSERT INTO tbl_komplain(kd_komplain,id_user,jenis_komplain,isi_komplain,
											  jam_komplain,tanggal_komplain,kd_ruangan,foto_komplain) 
				VALUES('$kd_komplain','$id_user','$jenis_komplain','$isi_komplain','$jam_komplain','$tanggal_komplain','$kd_ruangan','$foto_komplain')");  

	if($insert){  
		    $response['message'] = 'Laporan Berhasil Terkirim';
			$response['error'] = FALSE;
			echo json_encode($response);
	} else {
		$response["error"] = TRUE;
		$response["error_msg"] = "Laporan Gagal Terkirim";
		echo json_encode($response);
		}
	}


mysqli_close($koneksi);

?>