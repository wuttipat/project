<link rel="stylesheet" type="text/css" href="./css/listTheme.css">
<?php
	require_once '../database/database.php';	
	$data = db_select('disease');
	$count = 1;
?>


<table id="tableList">
	<tr>
		<th>ลำดับ</th>
		<th>ข้อมูลโรค</th>
	</tr>
	<? foreach($data as $key => $value): ?>
		<tr>
			<td><?=$count?> </td>
			<td><a  href="javascript:getAjax('./fontPage/detailDiseae.php?id=<?=$value['id_disease']?>')" > <?=$value['name_disease']?></a></td>
		</tr>
	<? $count++ ?>
	<? endforeach ?>
</table>
