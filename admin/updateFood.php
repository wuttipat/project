<?php
include('../database/database.php');
$id = $_GET['id'];
$dataFood = db_select('food', null, 'WHERE id_food = '. $id);
$dataFood = $dataFood[0];
$mapComponent = db_select('map_component', null, 'WHERE id_food = '. $id);
$mapFood = db_select ('map_food', null, 'WHERE id_food = '. $id);
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
$jsonMapComponent = json_encode($mapComponent);
$jsonMapFood = json_encode($mapFood);
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
    var mapComponent = <?=$jsonMapComponent?>;
    var mapFood = <?=$jsonMapFood?>;
	var typeComponent = <?=$typeComponentJson?>;
	var component = <?=$componentJson?>;
    var diseaseList = <?=$disease?>;
    var  countComponent =0 ;
	var countDisease = 0;
	var dataComponent = '';
	var dataDisease = '';
	$().ready(function(){
        var componentLoop = 0;
        for(var i = 0 ; i <= mapComponent.length -1 ; i ++){
             var data = mapComponent[i];
             addComponent();
             $('#selectComponent'+ componentLoop).val(data.id_component);
             $('#amountComponent'+ componentLoop).val(data.amount);
             componentLoop++;
        }

        var  diseaseLoop = 0;
         for(var i = 0 ; i <= mapFood.length -1 ; i ++){
            var data = mapFood[i];
             addRowDisease();
             $('#listDisease'+ diseaseLoop).val(data.id_disease);
             diseaseLoop++;
         }
         
		$('#foodData').submit(function(){
			if($('#nameFood').val().length < 1){
				 alert('กรุณราใส่ขื่ออาหาร');
				 $('#nameFood').focus();
				 return false;
			}
			
			for(var i = 0; i <= countComponent-1; i++){
				var value = $('#selectComponent' +i).val();
				var amount = $('#amountComponent' +i).val();
				if(value == undefined) continue;
				if(amount.length < 1) amount = 1;
				dataComponent += value + '-' + amount + ',';
			}
			
			for(var i = 0 ; i<= countDisease -1; i++){
				var value = $('#listDisease' +i).val();
				if(value == undefined) continue;
				dataDisease += value + ',';
			}
			if(dataComponent.length < 1){
				alert('กรุณาใส่ข้อมููลสว่นประกอย');
				return false;
			}else dataComponent = dataComponent.substring(0, dataComponent.length -1);
			
			if(dataDisease.length < 1){
				alert('กรุณาใส่ข้อมูลโรคที่สามารคบำบัด');
				return false;
			}else dataDisease = dataDisease.substring(0, dataDisease.length -1);
			
			$('#dataListComponent').val(dataComponent);
			$('#dataListDisease').val(dataDisease);	
		});
	});
	
    function generateDisease(){
        var tagDisesae = '';
        for(var i  in diseaseList){
            tagDisesae += '<option value="' + diseaseList[i].id_disease + '">' ;
            tagDisesae += diseaseList[i].name_disease;
            tagDisesae += '</option>';
        }
        return tagDisesae;
    }
  
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

<form id="foodData" action="./manageData/updateFood.php" method="post">
  <table width="100%" border="1" cellpadding="5" cellspacing="0">
  		<tr>
        	<th colspan="2">แก้ใขข้อมูลอาหาร</th>
        </tr>
    	<tr>
        		<td>ชื่ออาหาร</td>
                <td><input  type="text" id="nameFood" name="nameFood" value="<?=  $dataFood['name_food']?>"  />
                <input type="hidden" name="id" value="<?= $dataFood['id_food']?>" ></td>
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
            <td colspan="2"><textarea name="method" cols="40" rows="5" class="ckeditor" id="method"> <?=$dataFood['method_food']?> </textarea  ></td>
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
            <td colspan="2"><input type="submit" id="addData" value="บันทึก" /></td>
            <input type="hidden" id="dataListComponent" name="dataListComponent" />
            <input  type="hidden" id="dataListDisease" name="dataListDisease" />
        </tr>
    </table>
</form>
