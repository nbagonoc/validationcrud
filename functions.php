<?php
	function databaseConnect(){
		//ERROR REPORTING
		error_reporting(E_ALL ^ E_DEPRECATED);
		
		//CONNECT
		$connection = mysql_connect("localhost","nickbags","Th3r3nc3n3w");
			if(!$connection) {
				die("Database Connection Failed" .mysql_error());
			}
		
		//SELECT DB
		$db_select = mysql_select_db("samplecrud");
			if(!$db_select) {
				die("Database Selection Failed" .mysql_error());
			}
	}

	function databaseClose(){
		mysql_close();
	}
?>