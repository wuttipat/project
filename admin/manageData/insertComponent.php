<?php
    require_once("../../database/database.php");
	require_once("../../config/location.php");
	$component  = $_POST['txtSymptom'];
	$typeComponent = $_POST['typeComponent'];
	$volume = $_POST['txtVolume'];
	 $data = array(
	 'type_component' => $typeComponent,
	'name_component' => $component,
	'volume' => $volume);	
	db_insert('component', $data);
	header('location: '. $dataLocation .'admin/admin.php');
	?>