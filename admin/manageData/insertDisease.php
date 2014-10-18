<?php
	    require_once("../../database/database.php");
		require_once("../../config/location.php");
		$nameDisease = $_POST['nameDisesase'];
		$causeDisease = $_POST['causeDisease'];
		$preventionDiseae = $_POST['preventionDisease'];
		$data = array(
			'name_disease' => $nameDisease,
			'cause_disease' => $causeDisease,
			'prevention_disease' => $preventionDiseae);
		db_insert('disease', $data);
		header('location: '. $dataLocation .'admin/admin.php');
?>