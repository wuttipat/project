<?	
include('../database/database.php');
$data = db_select('type_wrong');
$dataSymptom = db_select('symptom', null, 'WHERE id_symptom= '. $_GET['id']);
$dataSymptom = $dataSymptom[0];
?>
<script>
    function editClick(){
        var value = $('#typeSymptom').val();
        $.get('./manageData/updateSymptom.php', {'id' : <?=$_GET['id']?>, 'typeComponent' : value}, function(data){
		    getAjax('./mainListSymptom.php');
	    });
	    $('#dialog').dialog('close');
    }
</script>


<table border="1" cellspacing="0" cellpadding="5" width="100%">
	<tr>
		<td colspan=2>แก้ไขอาการผิดปกติ</td>
	</tr>
	<tr>
		<td><input type="text" readonly="readonly" id="txtSymptom" name="txtSymptom" value="<?=$dataSymptom['symptom']?>" ></label></td>
		<td><select id="typeSymptom" name="typeWrong" >
			<?foreach($data as $key => $value):?>
            	<? if($value['id_type'] == $dataSymptom['type_wrong']) :?>
                <option value="<?=$value['id_type']?>" selected="selected"><?=$value['name_type']?></option>
                <? else:?>
				<option value="<?=$value['id_type']?>"><?=$value['name_type']?></option>
                <? endif?>
			<?endforeach?>
		</select></td>
	</tr>
</table>
