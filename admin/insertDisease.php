<?
	include('../database/database.php');
	$dataSymptom = db_select('symptom');
	$dataTypeWrong = db_select('type_wrong');
	$symptomJson = json_encode($dataSymptom);
	$typeWrongJson = json_encode($dataTypeWrong);
?>
<style>
	img{
			width:16px;
			height:16px;
			cursor:pointer;
	}
</style>

<script>
	var jsonSymptom = <?=$symptomJson?>;
	var jsonTypeWrong = <?=$typeWrongJson?>;
	var count = 0;
	$().ready(function(){
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
	function generateRow(){
		var tag = ' <tr><td>'+ generateSelectTypeWrong() +'</td>\
							<td>'+generateSelelctSymptom()+'</td>\
							<td><img src="./img/delete.png" /></td></tr>';
		return tag;
	}
</script>

<table width="100%"  border="1" cellpadding="3" cellspacing="0" >
	<tr>
    	<th colspan="2">เพื่มข้อมูลโรค</th>
    </tr>
	<tr>
    	<td>ชื่อโรค</td>
        <td><input type="text" name="txtNameDisease"  /></td>
    </tr>
 	<tr>
    	<td>สาเหตู</td>
        <td><textarea name="cause" cols="40" rows="5" id="cause"></textarea></td>
    </tr>
    <tr>
    	<td colspan="2">อาการ</td>
    </tr>
    <tr>
      	<td  colspan="2">
        	<table id="Symptom" width="100%" border="1" cellpadding="3" cellspacing="0">
            	<tr>
                	<td>ประเภทอาการผิดปกติ</td>
                    <td>อาการผิดปกติ</td>
                    <td>ลบ</td>
                </tr>
            </table>
            <div>
            	<a href="javascript:addRow()" ><img src="./img/add-icon.png" /></a>
            </div>
        </td>
        <tr>
    	<td>วิธีการป้องกัน</td>
        <td><textarea name="prevention" cols="40" rows="5" id="cause"></textarea></td>
    </tr>
    </tr>
</table>