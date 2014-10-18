<?
		include('../database/database.php');
		$data = db_select('type_wrong');
?>
<script>
	$().ready(function(){
				changeContent('all');
		$('#selectType').change(function(){
				changeContent($(this).val());
		});
	});
	function changeContent(id){
		$.get('listSymptom.php', {'typeId' : id}, function(data){
			$('#contentListSymptom').html(data);
		});
	}
	function dialog(id){
			$('#dialogEdit').dialog();	
			$.get('updateSymptom.php', {'id' : id}, function(data){
				$('#dialogEdit').html(data);
			});

	}
</script>
<div style="text-align:center">
 	ประเภทอาการผิดปกติ
	<select id="selectType" > 
    	<option value="all">ทั้งหมด </option>
        <? foreach($data as $key =>$value):?>
        	<option value="<?=$value['id_type']?>"><?=$value['name_type']?> </option>
        <? endforeach?> 
    </select>
</div>
<div  id="contentListSymptom">
	
</div>
<div id="dialogEdit" title="แก้ไข้ข้อมูล">
</div>