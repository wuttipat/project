<?php
	    require_once("../../database/database.php");
		require_once("../../config/location.php");
		$autoIncrement = db_get_auto_increment('disease');
		$dataSymptom = split(",", $_POST['dataSymptom']);
		$nameDisease = $_POST['txtNameDisease'];
		$causeDisease = $_POST['cause'];
		$preventionDiseae = $_POST['prevention'];
		$data = array(
			'name_disease' => $nameDisease,
			'cause_disease' => $causeDisease,
			'prevention_disease' => $preventionDiseae);
		db_insert('disease', $data);
		foreach($dataSymptom as $key => $value){
			$data = array(
				'id_disease' => $autoIncrement,
				'id_symptom' => $value);
			db_insert('map_disease', $data);
		}
		print_r($autoIncrement);
// 		header('location: '. $dataLocation .'admin/admin.php');
?>