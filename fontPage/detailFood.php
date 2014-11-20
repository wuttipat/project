<link rel="stylesheet" type="text/css" href="./css/detail.css">
<link rel="stylesheet" type="text/css" href="./css/fontTheme.css">
<?php
    require_once '../database/database.php';	
    $id = $_GET['id'];
    $dataFood = db_select('food', null , 'WHERE id_food = '. $id);
    $dataFood= $dataFood[0];
    $typeFood=  db_select('type_food', null, ' WHERE  id_type_food = '. $dataFood['type_food']);
    $dataFood['type_food'] = $typeFood[0]['name_type_food'];
    $dataComponent = db_select('map_component', null , 'WHERE id_food = '. $id);
    $dataMapFood = db_select('map_food', null, 'WHERE id_food ='. $id);
    foreach ($dataComponent as $key => $value){
        $component  = db_select('component' , null, 'WHERE id_component = '. $value['id_component']);
         $dataComponent[$key]['component'] = $component [0];
    }
    foreach ($dataMapFood as $key => $value){
        $dataDisease = db_select('disease' , array('id_disease', 'name_disease'), ' WHERE id_disease = '. $value['id_disease']);
        $dataMapFood[$key] = $dataDisease[0];
    }
?>
<table>
    <tr>
        <td colspan="2"> <?=$dataFood['name_food']?></td>
    </tr>
    <tr>
        <td>ประเภทอาหาร</td>
        <td><?=$dataFood['type_food']?></td>
    <tr>
        <td>ส่วนประกอบ </td>
        <td>
            <ul>
                   <?foreach($dataComponent as $key => $value) : ?>
                         <li>
                        <?=$value['component']['name_component']?>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?=$value['amount']?> &nbsp;&nbsp;&nbsp;
                        <?=$value['component']['volume']?>  
                          </li>
                     <? endforeach?>
             </ul>
        </td>
    </tr>
     <tr>
        <td>วิธีทำ</td>
        <td><?=$dataFood['method']?></td>
    </tr>
    <tr>
        <td>โรคที่สามารคบำบัดได้ </td>
        <td>
             <ul>
                   <?foreach($dataMapFood as $key => $value) : ?>
                         <li>
                               <a  href="javascript:getAjax('./fontPage/detailDiseae.php?id=<?=$value['id_disease']?>')" > <?=$value['name_disease']?></a>  
                          </li>
                   <? endforeach?>
             </ul>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        </td>
    </tr>
</table>

