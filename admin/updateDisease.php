<?php
require_once ("../database/database.php");
$dataTypeWrong = db_select ( 'type_wrong' );
$dataSymptom = db_select ( 'symptom' );
$data = db_select ( 'disease', null, ' WHERE   id_disease = ' . $_GET ['id'] );
$data = $data [0];
$data ['mapper'] = db_select ( 'map_disease', null, ' WHERE  id_disease = ' . $_GET ['id'] );
$optionType = '';
foreach ( $dataTypeWrong as $key => $value ) {
	$optionType .= '<option value="' . $value ['id_type'] . '">' . $value ['name_type'] . '</option>';
}

$optionSymptom = '';
foreach ( $dataSymptom as $key => $value ) {
	$optionSymptom .= '<option value"' . $value ['id_symptom'] . '">' . $value ['symptom'] . '</option>';
}

$jsonMapper = json_encode ( $data ['mapper'] );
$symptomJson = json_encode ( $dataSymptom );
$typeWrongJson = json_encode ( $dataTypeWrong );
?>

<style>
img {
	width: 16px;
	height: 16px;
	cursor: pointer;
}
</style>
<script type="text/javascript" src="../js/jquery.js"></script>
<script>
	var jsonSymptom = <?=$symptomJson?>;
	var jsonTypeWrong = <?=$typeWrongJson?>;
	var jsonMapper = <?=$jsonMapper?>;
	var count = 0;
	$().ready(function(){
			
	});
	
	$(window).load(function(e) {
		 var countLoop = 0;
		 for(var i = 0 ; i <= jsonMapper.length -1 ; i ++){
			  var data = jsonMapper[i];
				addRow();		
				$( "#selectSymptom"+ countLoop).val(data.id_symptom);
				countLoop++;
			}
			count = countLoop;
	});
	
	function generateSelectTypeWrong(){
			var tag = '<select id="selectTypeWrong' + count +  '" index="'+count+'">';
			tag += '<option value="all">ทั้งหมด</option>';
	 		for( var i = 0 ; i < jsonTypeWrong.length  ; i++){
					tag += '<option value="'+ jsonTypeWrong[i].id_type +'">'+  jsonTypeWrong[i].name_type +'</option>';
			} 
			tag += '</select>';
			return tag;
	}
	
	function onSelectTypeWrong(id){
		$(id).change(function(){
			var id = $(this).attr('index');
			$('#selectSymptom'+id).html('');
			$('#selectSymptom'+id).append(generateOptionSelectSymptom($(this).val()));
		});
	}
	function generateOptionSelectSymptom(idType){
		var tag = '';
		for(var i = 0; i < jsonSymptom.length ; i++){
				if(idType == 'all') tag += '<option value="'+ jsonSymptom[i]. id_symptom+'">'+ jsonSymptom[i].symptom +'</option>';
				else{
						if(jsonSymptom[i].type_wrong == idType){
						 tag += '<option value="'+ jsonSymptom[i]. id_symptom+'">'+ jsonSymptom[i].symptom +'</option>';
						}
				}
		}
		return tag;
	}
	function generateSelelctSymptom(){
		var tag = '<select id="selectSymptom'+count+'">';
		tag += generateOptionSelectSymptom('all');
		 tag += '</select>';
		 return tag;
	}
	function addRow(){
		$('#Symptom').append(generateRow());
		onSelectTypeWrong('#selectTypeWrong' +count);
		count++;
	}

	function deleteRow(id){
		$('#rowSymptom' + id).html('');
	}
	
	function generateRow(){
		var tag = ' <tr id="rowSymptom' + count + '"><td>'+ generateSelectTypeWrong() +'</td>\
							<td>'+generateSelelctSymptom()+'</td>\
							<td><a href="javascript:deleteRow('+ count+')"><img  src="./img/delete.png" /></a></td></tr>';
		return tag;
	}

	$('#submitDisease').submit(function(){
		var dataSymptom = '';
		if(checkSubmit() == false)return false;
		for(var i = 0 ; i <= count-1 ; i++){
			var value = $('#selectSymptom' +i).val();
			if(value == undefined) continue;
			dataSymptom += value + ',';
		}
		if(dataSymptom < 1){
			alert('กรุณาใส่ข้อมูลอาการผิดปกติ');
			return false;
		}else dataSymptom = dataSymptom.substring(0, dataSymptom.length -1);
		$('#dataSymptom').val(dataSymptom);
	});
});
</script>
<form id="submitDisease" action="./manageData/updateDisease.php" method="post">
	<table width="100%" border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th colspan="2">แก้ใชข้อมูลอาหาร</th>
		</tr>
		<tr>
			<td>ชื่อโรค</td>
			<td><input type="text" name="txtNameDisease"
				value="<?=$data['name_disease'] ?>" /></td>
		</tr>
		<tr>
			<td>สาเหตุ</td>
			<td><textarea name="cause" cols="40" rows="5" id="cause"
					value="<?=$data['cause_disease'] ?>"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">อาการ</td>
		</tr>
		<tr>
			<td colspan="2">
				<table id="Symptom" width="100%" border="1" cellpadding="3"
					cellspacing="0">
					<tr>
						<td>ประเภท</td>
						<td>อาการ</td>
						<td>ลบ</td>
					</tr>
				</table>
				<div>
					<a href="javascript:addRow()"><img src="./img/add-icon.png" /></a>
				</div>
			</td>
		
		
		<tr>
			<td>วิธีการป้องกัน</td>
			<td><textarea name="prevention" cols="40" rows="5" id="cause"
					value="<?=$data['prevention_disease'] ?>"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="แก้ไข"></td>
		</tr>
	</table>
</form>