<?php
	include("../database/database.php");	
	$data = db_select('type_wrong');
	$count = 1;
?>


<script src="../javascript/jquery/jquery.js"></script>
<script src="../javascript/jquery/jquery-ui.js"></script>
<script>
	$().ready(function(){
		$('.deleteWrong').click(function(){
			if(confirm('คุณต้องการลบข้อมูลนี้หรือไม่') == true){
				var data = $(this).attr('href');
				$.get('./manageData.php',{ "menu": "delete_type_data", "type": data },function(data){
					alert("การลบข้อมูลเสร็จสิ้น");
					location.reload(); 
				});
			}
		});
	});
</script>

<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.10.3.custom.css" />
<link rel="stylesheet" type="text/css" href="../css/tableProject.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

	
	<table class="tableProject" cellspacing="0" >
    	<tr>
        	<td> ลำดับ </td>
            <td> ประเถท</td>
            <td>ลบ</td>
        </tr>
	<? if(count($data) > 0 ) :?>
	    	<? foreach($data as $key => $value): ?> 
			<tr>
		    	<td><?=$count?></td>
		    	<td><?=$value['name_type']?></td>
		        <td><img href="<?=$value['name_type']?>" class="deleteWrong" src="./icon/delete.ico" style="cursor:pointer" width="16px" height="16px"/></td>
		    </tr>
		<? $count++ ?>
	  	<? endforeach ?>
	<? endif?>
    </table>

