<?php
	require_once '../database/database.php';
	$id = $_GET['id'];
	$data = db_select('symptom', null ,'WHERE id_symptom ='. $id);
?>
<table>
	
</table>