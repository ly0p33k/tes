<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

	require_once ("../conn/conn.php");
	class Login{
		function startLogin(){

			$connection = new Connection();
			$conn = $connection->getConnection();

				try{

					if (isset($_POST['submit'])) {
						if (empty($_POST['username']) || empty($_POST['password'])){
							header ('Location: errorLogin.php' );
						} else {

							// var log
							$username = $_POST['username'];
							$password = $_POST['password'];

							// query
							$log = "SELECT * FROM adm";
							$result = $conn->prepare($log);
							$result->execute();

							foreach ($result as $data) {
								if($username!=$data['username']){
									header ('Location: errorLogin.php');
								} 
								else if($password!=$data['password']){
									header ('Location: errorLogin.php');
								} 
								else {
									session_start(); // run the session on
									$_SESSION['username'] = $username; // use username sd the session
									header ('Location: ../display/display.php');
								}
							}
						}
					}
		 	} catch (PDOException $e){
		 		echo "ERROR : ". $e->getMessage();
		 	}

		}
	}

	$login = new Login();
	$login->startLogin();
?>
