<?
	include('../database/database.php');
	if($_GET['typeId']  == 'all')$data = db_select('symptom');
	else $data = db_select('symptom' , null, 'WHERE  type_wrong = '. $_GET['typeId']);
	 if(count($data)){
			foreach($data as $key => $value){
				$type_wrong  = db_select('type_wrong', null, 'WHERE  id_type = '. $value['type_wrong']);
				$data[$key]['type_wrong'] = $type_wrong[0];
			};
	 }
?>

<style>
	img{
		 height:16px;
		 width:16px ;
		 cursor:pointer;
	}
	table{
		text-align:center;
	}
</style>

<script>

</script>

<table border="1" cellpadding="5" cellspacing="0" width="100%">
	<tr>
    	<th colspan="4">อาการผิดปกติ</th>
    </tr>
	<tr>
    	<th>อาการผิดผกติ</th>
        <th>ประเภทอาการผิดปกติ</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
    </tr>
    <? if(count($data) != 0):?>
		<? foreach($data as $key => $value):?>
            <tr>
                <td><?=$value['symptom']?> </td>
                <td><?=$value['type_wrong']['name_type']?></td>
                <td><a href="javascript:openDialogUpdate('./updateSymptom.php','<?=$value['id_symptom']?>', './listSymptom.php')"><img src="./img/edit.png"  /></a></td>
                <td><img src="./img/delete.png"></td>
            </tr>
        <? endforeach?>
        <? endif?>
</table>
