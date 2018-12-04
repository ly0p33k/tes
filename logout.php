<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

	require_once ("../conn/conn.php");
	class Logout{
		function startLogout(){
			session_start();
			session_destroy();
			header ('Location: login.php');
			exit;
		}
	}

$out = new Logout();
$out->startLogout();

?>