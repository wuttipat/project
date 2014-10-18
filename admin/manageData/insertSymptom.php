<?php
    require_once("../../database/database.php");
	require_once("../../config/location.php");
	$typeWrong  = $_POST['typeWrong'];
	$symptom = $_POST['txtSymptom'];
	 $data = array(
	 'type_wrong' => $typeWrong,
	'symptom' => $symptom);	
	db_insert('symptom', $data);
	header('location: '. $dataLocation .'admin/admin.php');
	?>