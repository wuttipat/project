<?php
	    require_once("../../database/database.php");
		require_once("../../config/location.php");
		$autoIncrement = db_get_auto_increment('food');
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
		db_insert('food', $data);
		foreach($listComponent as $key => $value){
			$dataComponent = split("-", $value);
			$data = array(
				'id_food' => $autoIncrement,
				'id_component' => $dataComponent[0],
				'amount' => $dataComponent[1]
			);
			db_insert('map_component', $data);
		}
		
		foreach($listDisease as $key => $value){
			$data = array(
				'id_food' => $autoIncrement,
				'id_disease' => $value
			);
			db_insert('map_food', $data);
		}
		
 		header('location: '. $dataLocation .'admin/admin.php');
		
?>
