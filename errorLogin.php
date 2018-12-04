<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

	require_once ("../conn/conn.php");

	// start session
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- checking the session is available or not-->
	<?php
		if(empty($_SESSION['username'])){
			?>
			<form method="post" action="proses_login.php">
			<table border="0" align="center" cellpadding="5" cellspacing="0">
				<tr>
					<td colspan="3">username/password is wrong</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" placeholder="Masukkan Username" required="required"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" placeholder="Masukkan Password" required="required"></td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td><input type="submit" name="submit" value="login"></td>
				</tr>
			</table>
		</form>
		<?php
		}else{
				echo "<center>Hi, you! Welcome.</center>";
        		echo "<a href='logout.php' style='margin-left: 21px; color: #000000'>Logout</a>";
		}
?>
</body>
</html>