<?
    include('../database/database.php');
    $data =  db_select('component');

     if(count($data)){
			foreach($data as $key => $value){
				$type_component  = db_select('type_component', null, 'WHERE  id_type_component = '. $value['type_component']);
				$data[$key]['type_component'] = $type_component[0];
			};
	 }
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
    	<th colspan="5">ส่วนประกอบ</th>
    </tr>
	<tr>
    	<th>ชื่อส่วนประกอบ</th>
        <th>ประเภทส่วนประกอบ</th>
        <th>ปริมาตร</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
    </tr>
    <?foreach($data as $key => $value):?>
        <tr>
            <td><?=$value['name_component']?></td>
            <td><?=$value['type_component']['name_type_component']?></td>
            <td><?=$value['volume']?></td>
            <td><a href="javascript:openDialogUpdate('./updateComponent.php','<?=$value['id_component']?>', './listComponent.php')"><img src="./img/edit.png"  /></a></td>
            <td><img src="./img/delete.png" /> </td>
        </tr>
    <?endforeach?>
</table>
