<?php
	require_once '../database/database.php';
	require_once './ClassAnalysis.php';
	$symptom = array(3, 2, 1, 4, 5,32, 53, 54, 56, 57, 10, 42, 31, 22);
	$arrData = array();
	$arrOut = array();
	foreach($symptom as $key => $value){
		$data = db_select('map_disease', null, ' WHERE id_symptom = '. $value);
		if(count($data) > 0){
			foreach($data as $index => $item){
				if(!isset($arrData[$item['id_disease']]))$arrData[$item['id_disease']] = new ClassAnalysis($item['id_disease'], $item['id_symptom']);
				else $arrData[$item['id_disease']]->setIndexTrue($item['id_symptom']);
			}
		}
	}
	foreach($arrData as $key => $value){
		print_r($key. "\n");
		$arrOut[$value->getName()] = floor($value->getPercent());
	}
	arsort($arrOut);
	print_r($arrOut);
?>