<?php
include('../database/database.php');
$typeFood = db_select('type_food');
$tagOptionFood = "";
foreach($typeFood as $key => $value){
		$tagOptionFood .= '<option value="'. $value['id_type_food'] .'"> '.  $value['name_type_food'].'</option>';
}
$dataDisease = db_select("disease");
$typeComponent = db_select('type_component');
$component = db_select('component');
$disease = json_encode($dataDisease);
$typeComponentJson = json_encode($typeComponent);
$componentJson = json_encode($component);
?>
<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/ckeditor/ckeditor.js"></script>
<style>
    img{
        width:16px;
        height:16px;
        cursor:pointer;
    }
	div{
			padding-top:5px;
			padding-bottom:5px;
	}
</style>
<script>
	var typeComponent = <?=$typeComponentJson?>;
	var component = <?=$componentJson?>;
    var diseaseList = <?=$disease?>;
    var  countComponent =0 ;
    function generateDisease(){
        var tagDisesae = '';
        for(var i  in diseaseList){
            tagDisesae += '<option value="' + diseaseList[i].id_disease + '">' ;
            tagDisesae += diseaseList[i].name_disease;
            tagDisesae += '</option>';
        }
        return tagDisesae;
    }
    var countDisease = 0;
    function addRowDisease(){
        var rowDisease = $('#listDisease');
        var select = '<select id="listDisease' + countDisease +'" >' + generateDisease() + '</select>';
        var addRow = '<tr id="rowDisease'+countDisease+'">';
        addRow += '<td>'  +  select + '</td>';
        addRow+= '<td><a href="javascript:deleteDiseaseClick('+countDisease+')"><img src="./img/delete.png" ></a></td>';
        addRow += '</tr>';
       rowDisease.append(addRow);
       deleteDiseaseClick();
        countDisease ++;
    }

function deleteDiseaseClick(id){
        $('#rowDisease'+id).html('');
}

    function addComposition(id, count){
        var tag = '<tr id="row'+count+'">';
        tag += '<td><input type="text" size="15"  id="name' + count + '"> </td>';
        tag += '<td><input type="text" size="15" id="amount' + count + '"  > </td>';
        tag += '<td><input type="text" size="15" id="capacity' + count + '"  > </td>';
        tag += '<td><a href="javascript:deleteClick(' +count+')"><img src="img/delete.png" class="delete" ></a></td>';
        $(id).append(tag);
    }
    function deleteClick(id){
            $('#row'+id).html('');
    }
	
	function generateSelectTypeComponent(){
		var tag = '<select index='+countComponent+' id="selectTypeComponent'+countComponent+'">';
		tag += '<option value="all">ทั้งหมด</option>';
		for(var i = 0 ; i < typeComponent.length; i++){
			tag +=	 '<option value="'+typeComponent[i].id_type_component+'">'+typeComponent[i].name_type_component+'</option>';
		}
		tag += '</select>';
		return tag;
	}
	function generateOptionComponent(id){
			var tag = '';
			for(var i = 0 ;  i < component.length ;i++){
				if(id == 'all') tag+='<option value="'+component[i].id_component+'">'+component[i].name_component+'</option>';
				else{
						if(component[i].type_component == id)  tag+='<option value="'+component[i].id_component+'">'+component[i].name_component+'</option>';
				}
			}
			return tag;
	}
	function generaetSelectComponent(){
			var tag = '<select id="selectComponent'+countComponent+'">';
			tag+= generateOptionComponent('all');
			tag +='</select>';
			return tag;
	}
	function  addComponent(){
			$('#component').append('\
				<tr id="componentRow'+ countComponent +'">\
				<td>'+generateSelectTypeComponent()+'</td>\
				<td>'+generaetSelectComponent()+'</td>\
				<td><input type="number"  id="amountComponent'+countComponent+'"/></td>\
				<td><a href="javascript:deleteComponent('+countComponent+')"><img src="./img/delete.png"</a></td></tr>');
				$('#selectTypeComponent'+countComponent).change(function(){
						var index = $(this).attr('index');
						$('#selectComponent'+ index).html('');
						$('#selectComponent'+ index).append(generateOptionComponent($(this).val()));
				});
			countComponent++;
	}
	function deleteComponent(id){
			$('#componentRow'+id).html('');
	};
</script>

<form id="foodData" action="./manageData/insertFood.php" method="post">
  <table width="100%" border="1" cellpadding="5" cellspacing="0">
  		<tr>
        	<th colspan="2">เพิ่มข้อมูลอาหาร</th>
        </tr>
    	<tr>
        		<td>ชื่ออาหาร</td>
                <td><input  type="text" name="nameFood"  /></td>
        <tr>
        <tr>
        	<td>ประเภทอาหาร</td>
            <td><select name="typeFood"> <?=$tagOptionFood?> </select>
        </tr>
        <tr>
            <td colspan ="2"> ส่วนผสม </td>
        </tr>
        <tr>
            <td colspan="2"><table id="component" width="100%" border="1">
              <th>ประเภท</th>
              <th>ส่วนประกอบ</th>
                    <th>จำนวน</th>
                    <th>ลบ</th>
                </table> 
                <div><a href="javascript:addComponent()"><img src="img/add-icon.png"/></a></div>
            </td>
        </tr>
        <tr>
            <td colspan="2">วิธีทำ</td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="method" cols="40" rows="5" class="ckeditor" id="method"> </textarea  ></td>
        </tr>
        <tr>
            <td colspan="2"> โรคที่สามารถบำบัด</td>
    </tr>
         <tr>
            <td colspan="2">
                <table id="listDisease" width="100%" border="1">
                    <th>โรค</th>
                    <th>ลบ</th>
                </table>
                 <div><a href="javascript:addRowDisease()"><img src="img/add-icon.png" /></a></div>
            </td>
         </tr>
        </tr>
        <tr>
            <td colspan="2"><input type="button" id="addData" value="บันทึก" /></td>
            <input  type="hidden" id="dataListDisease" name="dataListDisease" />
        </tr>
    </table>
</form>
