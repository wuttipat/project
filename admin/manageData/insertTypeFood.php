<?php
	    require_once("../../database/database.php");
		require_once("../../config/location.php");
		$nameType = $_POST['nameType'];
		$data = array(
			'name_type_food' => $nameType
		);
	 	db_insert('type_food', $data);
		header('location: '. $dataLocation .'admin/admin.php'); 
?>
