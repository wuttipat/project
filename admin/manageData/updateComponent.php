<?
    require_once("../../database/database.php");
    $data = array(
        'type_component' => $_GET['typeComponent'],
        'volume' => $_GET['volume']
    );
   db_update('component', $data, 'WHERE id_component = '. $_GET['id']);
    
?>
