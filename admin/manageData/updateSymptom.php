<?
    require_once("../../database/database.php");
    $data = array(
        'type_wrong' => $_GET['typeSymptom']
    );
 
    db_update('symptom', $data, 'WHERE id_symptom = '. $_GET['id']);
    
?>
