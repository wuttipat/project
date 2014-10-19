<?	
include('../database/database.php');
$data = db_select('type_component');
?>
<form action="./manageData/insertComponent.php" method="post">
<table width="100%" align=center border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th colspan=3>เพิ่มส่วนประกอบ</th>
	</tr>
    <tr>
    	<th>ชื่อ</th>
        <th>ประเภท</th>
        <th>ปริมาตร</th>
    </tr>
	<tr>
		<td><input type="text" id="txtComponent" name="txtSymptom" class="ui-widget "/></td>
		<td><select id="typeComponent" name="typeComponent">
			<? foreach($data as $key => $value):?>
				<option value="<?=$value['id_type_component']?>"><?=$value['name_type_component']?></option>
			<?endforeach?>
		</select></td>
        <td><input type="text" size="10" name="txtVolume" id="txtVolume"></td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" value="บันทึก" /></td>
	</tr>
</table>
</form>