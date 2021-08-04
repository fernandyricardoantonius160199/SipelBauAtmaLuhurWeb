<?php 

$host='127.0.0.1';
$username='root';
$pwd='';
$db="db_sipel_sarpras_bau_al";

$con=mysqli_connect($host,$username,$pwd,$db) or die('Unable to connect');

if(mysqli_connect_error($con))
{
	echo "Failed to Connect to Database ".mysqli_connect_error();
}


$sql="SELECT * FROM tbl_komplain ORDER BY jam_komplain DESC, tanggal_komplain DESC"; 
 //include 'koneksi.php'; 
 $hasil         = mysqli_query($con,$sql);
 $json_response = array();
 
if($hasil)
{
 while ($row = mysqli_fetch_array($hasil)) {
     $json_response[] = $row;
 }
 echo json_encode(array('handphone' => $json_response));
} 

?>


