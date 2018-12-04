<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/
	require_once("../conn/conn.php");

	// start class
	class Login{
		function startLogin(){
			$connention = new Connection();
			$conn = $connention->getConnection();

			try{

				if (isset($_POST['submit'])) {
				if(empty($_POST['username']) || empty($_POST['password'])){
					header('location: errorlogin.php');
				} else {

					// var data login
					$username = $_POST['username'];
					$password = $_POST['password'];

					// act sql
					$sql = "SELECT * FROM adm";
					$result = $conn->prepare($sql);
					$result->execute();

					foreach ($result as $data) {
						if($username!=$data['username']){
							echo "<script>alert('Username Salah!');
							document.location.href='login.php</script>\n";
						} 
						else if($password!=$data) {
							echo "<script>alert('Password Salah!');
							document.location.href='login.php</script>\n";
						}
						else {
							session_start(); // run the session on
							$_SESSION['username'] = $username;
							header('Location: ../display/display.php');
						}
					}
				}
				//if 1
				}
			// try
			} catch(PDOException $e){
				echo "ERROR :". $e->getMessage(). "<br>";
			}
		// function startLogin
		}
	// class Login
	}

$login = new Login();
$login->startLogin();
?>