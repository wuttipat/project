<?PHP
$hostname = 'http://'. getenv('HTTP_HOST');
//$dataLocation = file($hostname . "/Project/config/location.txt");
$dataLocation = file_get_contents($hostname.'/Project/config/location.txt');
//	$dataLocation = $dataLocation[0];

?>