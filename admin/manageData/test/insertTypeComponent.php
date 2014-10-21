<?
	 require_once("../../database/database.php");
	require_once("../../config/location.php");
	$nameType  = $_POST['nameType'];
 	$data = array(
		'name_type_component' => $nameType
	);
 	db_insert('type_component', $data);  
	header('location: '. $dataLocation .'admin/admin.php');
?>