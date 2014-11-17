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
		<td><?=$value['name_food']?></td>
	</tr>
	<? $count++?>
	<? endforeach ?>
</table>