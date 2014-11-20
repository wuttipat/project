<?php
require_once '../database/database.php';
$dataTypeWrong = db_select ( 'type_wrong' );
?>
<link rel="stylesheet" type="text/css" href="./css/listTheme.css">
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
	width: 48%;
	display: inline-block;
	vertical-align: top;
	background-color: pink;
	height: 800px;
}

#selectSymtom {
	width: 40%;
	display: inline-block;
	vertical-align: top;
	background-color: yellow;
	height: 800px;
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
	width: 30%;
}

.iconlist {
	display: inline-block;
	width: 100px;
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
}

#contentSymptom{
	width:100%;
	height:100%;
}
</style>
<script>
    var count = 0;

    function removeList(id){
        $('#select'+id).hide('slide', {direction: 'left'},400);
    }
    
    function appendSelect(){
        $('#listSelect').prepend('<li class="selectList" id="select'+ count +'"><a id="value'+ count +'"></a></li>');
        $('#value'+count).hide();
        addNewBlockList(count);
        count++;
    }

    function addNewBlockList(id){
        $('#select' +id).animate({
        }, 200, function(){
            insertValue(id, "testdd" + count);
        });
    }
    function insertValue(id, value){
        
        $('#value'+id).html('<div class="textList">' + value + '</div><div class="iconlist"><img class="iconDelete" onClick="removeList('+id+')" src="./fontPage/img/delete.png" /></div>');
        $('#value'+id).show('slide', {direction: 'left'},400);
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
	<div id="contentSymptom">
		<a href="javascript:appendSelect()">test</a>
	</div>
</div>
<div id="selectSymtom">
	<ul id="listSelect">
	</ul>
</div>
