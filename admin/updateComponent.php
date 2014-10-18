<?	
include('../database/database.php');
$data = db_select('type_component');
$dataComponent = db_select('component', null, 'WHERE id_component= '. $_GET['id']);
$dataComponent = $dataComponent[0];
?>
<script>
       function editClick(){
            var value = $('#typeComponent').val();
            var volume = $('#volume').val();
            $.get('./manageData/updateComponent.php', {'id' : <?=$_GET['id']?>, 'typeComponent' : value, 'volume': volume }, function(data){
                getAjax('./listComponent.php');
            });
            $('#dialog').dialog('close');
        }
</script>

<table border="1" cellspacing="0" cellpadding="5" width="100%">
	<tr>
		<td colspan=3>แก้ไขส่วนประกอบ</td>
	</tr>
	<tr>
		<td><input type="text" readonly="readonly" id="txtSymptom" name="txtSymptom" value="<?=$dataComponent['name_component']?>" ></label></td>
		<td><select id="typeComponent" name="typeWrong" >
			<?foreach($data as $key => $value):?>
            	<? if($value['id_type_component'] == $dataComponent['type_component']) :?>
                <option value="<?=$value['id_type_component']?>" selected="selected"><?=$value['name_type_component']?></option>
                <? else:?>
				<option value="<?=$value['id_type_component']?>"><?=$value['name_type_component']?></option>
                <? endif?>
			<?endforeach?>
		</select></td>
		<td><input type="text" id="volume" value="<?=$dataComponent['volume']?>" /></td>
	</tr>
</table>
