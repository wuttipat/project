<?php
	require_once '../database/database.php';
	$count = 0;
	$id = $_GET['id'];
	$data = db_select('symptom', null ,'WHERE type_wrong ='. $id);
?>
<table>
	<tr>
	<?if(count($data) > 0):?>
		<?foreach($data as $key => $value):?>
			<td><?= $value['symptom']?></td>
			<?php 
				$count++;
				if($count %3 == 0){
					echo '</tr><tr>';
				}
			?>
		<?endforeach ?>
	<?endif?>
	</tr>
</table>