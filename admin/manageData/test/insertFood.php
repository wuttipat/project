<?php
	    require_once("../../database/database.php");
		require_once("../../config/location.php");
		$nameFood = $_POST['nameFood'];
		$typeFood= $_POST['typeFood'];
		$composition ="sdf-3-sdfe,sdf-5-sdf,asdf-5-sddd,asd3-4-s3,";
		$method = $_POST['method'];
		print_r($_POST);
		$composition = substr($composition, 0, strlen($composition) -1);
	/*	$data = array(
			'type_food' => $typeFood,
			'name_food' => $nameFood,
			'composition_food' => $composition,
			'method_food' => $method
		);
		db_insert('food', $data);
		header('location: '. $dataLocation .'admin/admin.php');*/
?>
