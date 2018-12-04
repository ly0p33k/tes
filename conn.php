<?php

// created by Sublime Text
// user : lyop 
// PHP Version 5.6.24

class Connection {
	function getConnection(){
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "siakad";

	try{
		$conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	}
		catch(PDOException $e){
			echo "ERROR CONNECTION : " . $e->getMessage();
		}
	}
}
?>