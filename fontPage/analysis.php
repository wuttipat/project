<?php
require_once'./ClassAnalysis.php';
require_once '../database/database.php';
$dataTypeWrong = db_select ( 'type_wrong' );
?>
<link rel="stylesheet" type="text/css" href="./css/fontTheme.css">
<style>
html, body {
	height: 100%;
	width: 100%;
}

#listSymptom {
	width: 10%;
	display: inline-block;
	vertical-align: top;
	height: 800px;
}

#symptom {
	width: 320px;
	display: inline-block;
	vertical-align: top;
/* 	background-color: pink; */
	height: 800px;
}

#selectSymtom {
	width: 260px;
	display: inline-block;
	vertical-align: top;
/* 	background-color: yellow; */
	height: 780px;
}

#listSelect li {
	list-style: none;
	padding-left: 0;
	font-size: 18px;
	font-weight: 500;
	border: 1px solid;
	padding-top: 5px;
	padding-bottom: 5px;
	border: 1px solid;
	padding-left: 10px;
}

ul {
	list-style: none;
	padding-left: 0;
}

.selectList {
	
}

.textList {
	display: inline-block;
	width: 200px;
}

.iconlist {
	display: inline-block;
	width: 25px;
}

.iconDelete {
	max-width: 16px;
	max-height: 16px;
	cursor: pointer;
}

.listWrongType {
	font-size: 18px;
	font-weight: 900;
}

.typeWrong li {
	background-color: gray;
	margin-top: 5px;
	text-align: center;
	padding: 5px;
	border-radius: 30px;
	cursor: pointer;
}

.typeWrong li a {
	color: white;
	text-shadow: 2px 2px black;
}

#contentSymptom{
	width:100%;
	height:780px;
	position: relative;
}
</style>
<script>
    var count = 0;
    var dataListSymptom = [];

    function removeList(count, id){
    	dataListSymptom.splice(dataListSymptom.indexOf(id), 1);
        $('#select'+count).hide('slide', {direction: 'left'}, 400);
    }
    
    function appendSelect(id, value){
    	if(dataListSymptom.indexOf(id) < 0){
	        $('#listSelect').prepend('<li class="selectList" id="select'+ count +'"><a id="value'+ count +'"></a></li>');
	        $('#value'+count).hide();
	        addNewBlockList(count, id, value);
	        count++;
    	}
    }

    function addNewBlockList(count, id, value){
        $('#select' +count).animate({
        }, 200, function(){
            insertValue(count, id, value);
        });
    }
    function insertValue(count, id, value){
       	dataListSymptom.push(id);
        $('#value'+count).html('<div class="textList">' + value + '</div><div class="iconlist"><img class="iconDelete" onClick="removeList('+count+', '+ id + ')" src="./fontPage/img/delete.png" /></div>');
        $('#value'+count).show('slide', {direction: 'left'}, 400);
    }

    function typeWrongClick(id){
    	$('#contentSymptom').hide('slide', {direction: 'left'}, 200, function(){
    		$.get('./fontPage/symptom.php?id=' + id, {}, function(data){
    			$('#contentSymptom').html(data);
    			$('#contentSymptom').show('slide', {direction: 'left'}, 200);
    		});
    	});
    }
</script>
<div id="listSymptom">
	<ul class="typeWrong">
	<? foreach($dataTypeWrong as $key => $value): ?>
		<li class='listWrongType'><a
			href="javascript:typeWrongClick('<?=$value['id_type']?>')"><?=$value['name_type']?></a></li>
	<? endforeach ?>
	</ul>
</div>
<div id="symptom">
	<div style="text-align: center;width: 300px;font-size: 16px"> อาการผิดปกติ </div>
	<div id="contentSymptom">
		
	</div>
</div>
<div id="selectSymtom">
	<div style="text-align: center;font-size: 16px"> เลือกอาการผิดปกติ </div>
	<ul id="listSelect">
	</ul>
</div>
