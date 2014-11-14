<?php
	require_once("../../database/database.php");
	require_once("../../config/location.php");
	$id = $_POST['id'];
	$nameFood = $_POST['nameFood'];
	$typeFood= $_POST['typeFood'];
	$method = $_POST['method'];
	$listComponent = $_POST['dataListComponent'];
	$listDisease = $_POST['dataListDisease'];
	$listComponent = split(",", $listComponent);
	$listDisease = split(",", $listDisease);
	
	$data = array(
			'type_food' => $typeFood,
			'name_food' => $nameFood,
			'method_food' => $method
	);
	
	db_update('food', $data, 'WHERE id_food = '. $id);
	db_delete('map_component', 'WHERE id_food ='. $id);
	db_delete('map_food', 'WHERE id_food ='. $id);
	foreach($listComponent as $key => $value){
		$dataComponent = split("-", $value);
		$data = array(
				'id_food' => $id,
				'id_component' => $dataComponent[0],
				'amount' => $dataComponent[1]
		);
		db_insert('map_component', $data);
	}
	
	foreach($listDisease as $key => $value){
		$data = array(
				'id_food' => $id,
				'id_disease' => $value
		);
		db_insert('map_food', $data);
	}
	
	header('location: '. $dataLocation .'admin/admin.php');
?>