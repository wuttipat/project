<?
	$m_host = "localhost"; 
	$m_user = "root"; 
	$m_pass = "1234"; 
	$m_name = "project"; 
	$link = mysql_connect($m_host,$m_user,$m_pass)or die ("no connect database");  
	mysql_select_db($m_name); 
	mysql_query ('SET CHARACTER SET utf8',$link);
	mysql_query ('SET collation_connection = "utf8_unicode_ci"',$link);
?>