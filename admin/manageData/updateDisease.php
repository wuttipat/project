<?php
require_once ("../../database/database.php");
require_once ("../../config/location.php");
$id = $_POST ['id'];
$name = $_POST ['txtNameDisease'];
$cause = $_POST ['cause'];
$dataSymptom = split(",", $_POST['dataSymptom']);
$prevention = $_POST ['prevention'];
$data = array(
	'name_disease' => $name,
	'cause_disease' => $cause,
	'prevention_disease' => $prevention
);

db_update('disease', $data, 'WHERE id_disease = '. $id);
db_delete('map_disease', 'WHERE id_disease = '. $id);
foreach($dataSymptom as $key => $value){
	$data = array(
			'id_disease' => $id,
			'id_symptom' => $value);
	db_insert('map_disease', $data);
}
header('location: '. $dataLocation .'admin/admin.php');
?>
