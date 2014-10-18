<?	
include('../database/database.php');
$data = db_select('type_wrong');
?>
<form action="./manageData/insertSymptom.php" method="post">
<table align=center>
	<tr>
		<td colspan=2>เพื่มอาการผิดปกติ</td>
	</tr>
	<tr>
		<td><input type="text" id="txtSymptom" name="txtSymptom" class="ui-widget "/></td>
		<td><select id="typeSymptom" name="typeWrong">
			<?foreach($data as $key => $value):?>
				<option value="<?=$value['id_type']?>"><?=$value['name_type']?></option>
			<?endforeach?>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" value="บันทึก" /></td>
	</tr>
</table>
</form>