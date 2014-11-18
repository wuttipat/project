<link rel="stylesheet" type="text/css" href="./css/listTheme.css">
<?php
require_once '../database/database.php';
$data = db_select ( 'food' );
$count = 1;

?>

<table>
	<tr>
		<th>ลำดับ</th>
		<th>ข้อมูลโรค</th>
	</tr>
	<? foreach($data as $key => $value): ?>
		<tr>
		<td><?=$count?> </td>
		<td><a  href="javascript:getAjax('./fontPage/detailFood.php?id=<?=$value['id_food']?>')" ><?=$value['name_food']?></a></td>
	</tr>
	<? $count++?>
	<? endforeach ?>
</table>
