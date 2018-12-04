<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

	require_once ("../conn/conn.php");
	session_start();
	if(empty($_SESSION['username']) && empty($_SESSION['password'])){
		header("Location: ../log/login.php");
	}
?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Input Data</title>
		<meta http-equiv="Content-Type" content="txt/html" charset="utf-8">
	</head>
	<body>
		<form method="post" action="proses.php">
			<center><table border="0" cellspacing="0" cellpadding="5" align="center">
				<tbody>
					<tr>
						<td colspan="3">
							<center>
								<h5>Masukan Data</h5>
							</center>
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input type="text" name="nim" placeholder="Masukkan NIM"></td>
					</tr>
					<tr>
						<td>Fakultas</td>
						<td>:</td>
						<td><input type="text" name="fakultas" placeholder="Masukkan Fakultas"></td>
					</tr>
					<tr>
						<td>Prodi</td>
						<td>:</td>
						<td><input type="text" name="prodi" placeholder="Masukkan Prodi"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"></td>
					</tr>
				</tbody></table></center>
			</form>
		</body>
</html>