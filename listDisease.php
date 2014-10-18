<?
	include('../database/database.php');
	$data = db_select('disease');
?>
<style>
	img{
		 height:16px;
		 width:16px ;
		 cursor:pointer;
	}
	table{
		text-align:center;
	}
</style>

<table border="1" cellpadding="5" cellspacing="0" width="100%">
	<tr>
    	<th colspan="3">ข้อมูลโรค</th>
    </tr>
	<tr>
    	<th>โรค</th>
         <th>แก้ไข้</th>
        <th>ลบ</th>
    </tr>
    <? foreach($data as $key => $value):?>
    	<tr>
        	<td><?=$value['name_disease']?> </td>
            <td><img src="./img/edit.png"></td>
            <td><img src="./img/delete.png"></td>
        </tr>
    <? endforeach?>
</table>