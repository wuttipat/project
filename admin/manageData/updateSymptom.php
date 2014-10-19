<?
    require_once("../../database/database.php");
    $data = array(
        'type_wrong' => $_GET['typeComponent']
    );
	
    db_update('symptom', $data, ' WHERE id_symptom = '. $_GET['id']);
    
?>
