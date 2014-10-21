<?
	function  db_select($table, $column = null, $where = null){
		require_once("dbconnect.php");
		$data;
		if ($column == null){
	  	$sqlstr = "select * from " . $table . " " . $where ; 
		}
		else {
			$sqlstr = "select ". join(',',$column)." from " . $table . " " . $where ; 
		}
		$result = mysql_query($sqlstr);
			while($row = mysql_fetch_assoc($result)){
				$data[] = $row;
			}
			return $data;

	}
	
	function db_insert($table, $data){
		require_once("dbconnect.php");
		foreach($data as $key => $value){
				if(gettype($value) == "string"){
					$data[$key] = "'".$value. "'";
				}
		}
		$sqlstr = "insert into ". $table."(". join(',',array_keys($data)). ") values (". join (',', $data). ")";
// 		print_r($sqlstr ."<br>");
		mysql_query($sqlstr) or die(mysql_error());

	}
	
	function db_update($table, $data, $where){
		require_once("dbconnect.php");
		foreach($data as $key => $value){
			if(gettype($value) == "string"){
				$data[$key] = "'".$value. "'";
			}
		}
		$column = "";
		foreach ($data as $key => $value){
			$column .= $key . " = " . $value . ",";
		}
		$column = substr($column,0, -1);
		$sqlstr = "UPDATE ". $table . " SET " . $column . " ". $where;		
		mysql_query($sqlstr) or die(mysql_error());
		mysql_close();
	}
	
	function db_delete($table, $where){
		if(gettype($value) == "string"){
			$data[$key] = "'".$value. "'";
		}
		require_once("dbconnect.php");
		$sqlstr = "delete from ". $table. " " . $where;
		mysql_query($sqlstr) or die(mysql_error());

	}
	
	function db_count($table, $where = ""){
		require_once("dbconnect.php");
		$sqlstr = "SELECT COUNT( * ) AS count FROM ". $table . "  ". $where;
		$result = mysql_query($sqlstr);
		$data =  mysql_fetch_assoc($result);
		return $data['count'];

	}

	function db_get_auto_increment($table){
		require_once("dbconnect.php");
		$sqlstr = "SHOW TABLE STATUS LIKE '". $table."'";
		$result = mysql_query($sqlstr);
			while($row = mysql_fetch_assoc($result)){
				$data[] = $row;
			}
			return $data[0]["Auto_increment"];
	}
?>
