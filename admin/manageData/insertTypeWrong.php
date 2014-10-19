<?php
    require_once("../../database/database.php");
	require_once("../../config/location.php");
	$nameType  = $_POST['nameType'];
 	$data = array(
		'name_type' => $nameType
	);
 	db_insert('type_wrong', $data);  
	header('location: '. $dataLocation .'admin/admin.php');
?>
