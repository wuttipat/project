<?
	include('../database/database.php');
	$data = db_select('type_food');
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
    	<th colspan="2">ประเภทอาหาร</th>
    </tr>
	<tr>
    	<th>ประเภทอาหาร</th>
        <th>ลบ</th>
    </tr>
    <? foreach($data as $key => $value):?>
    	<tr>
        	<td><?=$value['name_type_food']?> </td>
            <td><img src="./img/delete.png"></td>
        </tr>
    <? endforeach?>
</table>