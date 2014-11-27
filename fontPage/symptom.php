<?php
	require_once '../database/database.php';
	$count = 0;
	$id = $_GET['id'];
	$data = db_select('symptom', null ,'WHERE type_wrong ='. $id);
?>
<style>
	#tableSymptom{
		position:absolute;
		margin-top: 10px;
	}
	
	#tableSymptom tr td{
		text-align: left;
		font-size: 16px;
		font-weight: normal;
		padding-left: 5px;
		padding-top: 5px;
	}
</style>
<table id="tableSymptom" width="100%" border="1" cellspacing=0>
	<tr>
	<?if(count($data) > 0):?>
		<?foreach($data as $key => $value):?>
			<td >
				<a  href="javascript:appendSelect(<?= $value['id_symptom']?>, '<?=$value['symptom']?>')">
					<?= $value['symptom']?>
				</a>
			</td>
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