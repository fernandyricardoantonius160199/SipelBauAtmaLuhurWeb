<?php
$data["data"] [] = array("sukses" => true);
header('Content-Type:Application/json');
echo json_encode ($data);
?>