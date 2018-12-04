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
	class updateDisplay{
		function getDataById(){

			// new objeck from conn.php
			$connection = new Connection();
			$conn = $connection->getConnection();

			$id_mahasiswa = $_GET['id_mahasiswa'];

			try{
				$sqlDisplayData = "SELECT * FROM mahasiswa WHERE id_mahasiswa=$id_mahasiswa";
				$result = $conn->prepare($sqlDisplayData);
				$result->execute();
				$DataById = $result->fetchAll(PDO::FETCH_ASSOC);

				foreach($DataById as $data){
				?>
					<form method="post" action="update.php?id_mahasiswa=<?php echo $id_mahasiswa?>">
						<table align="center">
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><input type="text" name="nama" value="<?php echo $data['nama']?>" placeholder="Masukkan Nama"></td>
							</tr>
							<tr>
								<td>NIM</td>
								<td>:</td>
								<td><input type="text" name="nim" value="<?php echo $data['nim']?>" placeholder="Masukkan NIM"></td>
							</tr>
							<tr>
								<td>Fakultas</td>
								<td>:</td>
								<td><input type="text" name="fakultas" value="<?php echo $data['fakultas']?>" placeholder="Masukkan Fakultas"></td>
							</tr>
							<tr>
								<td>Prodi</td>
								<td>:</td>
								<td><input type="text" name="prodi" value="<?php echo $data['prodi']?>" placeholder="Masukkan Prodi"></td>
							</tr>
							<tr>
								<td colspan="2" align="right"><input type="submit" name="submit" value="Update"></td>
							</tr>
						</table>
					</form>
				<?php


				}
			}catch (PDOException $e){
				echo "Gagal mengupdate data: ". $e->getMessage();
			}
		}
	}

$displayDataForUpdate = new updateDisplay();
$displayDataForUpdate->getDataById();
?>