<link rel="stylesheet" type="text/css" href="./css/detail.css">
<?php
require_once '../database/database.php';
$id = $_GET ['id'];
$data = db_select ( 'disease', null, 'WHERE id_disease = ' . $id );
$data = $data[0];
$mapDisease = db_select('map_disease', null, 'WHERE id_disease = '. $id);
foreach($mapDisease as $key => $value){
	$symptom = db_select('symptom', null, 'WHERE id_symptom = '. $value['id_symptom']);
	$mapDisease['mapDisease'][] = $symptom[0];
}
?>

<table>
	<tr>
		<td colspan="2"><?= $data['name_disease']?></td>
	</tr>
	<tr>
		<td>สาเหตุ</td>
		<td><?=$data['cause_disease']?></td>
	</tr>
	<tr>
		<td>อาการ</td>
		<td>
			<? foreach($mapDisease['mapDisease'] as $key => $value): ?>
				<?=$value['symptom']?> 
			<? endforeach?>
		</td>
	</tr>
	<tr>
		<td>วิธีป้องกัน</td>
		<td><?=$data['prevention_disease']?></td>
	</tr>
</table>
