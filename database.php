<?php 

error_reporting(E_ALL);   
	ini_set('display_errors', '1');


	$host = "127.0.0.1";
	$dbname = "events";
	$user="root";
	$pass ="";


	$DBH = null;
		try {
		# MySQL with PDO_MYSQL
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		
	} catch(PDOException $e) {
		echo $e->getMessage();
	} 
	
 ?>