<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

	require_once ("../conn/conn.php");
	class Update{

		function startUpdate(){

			// new objeck from conn.php
			$connection = new Connection();
			$conn = $connection->getConnection();

			$response = array();

			$id_mahasiswa = $_GET['id_mahasiswa'];
			$nama		 = $_POST['nama'];
			$nim		 = $_POST['nim'];
			$fakultas	 = $_POST['fakultas'];
			$prodi		 = $_POST['prodi'];


			try{
				$sqlUpdate = "UPDATE mahasiswa SET nama='$nama', nim = '$nim', fakultas = '$fakultas', prodi = '$prodi' WHERE id_mahasiswa=$id_mahasiswa";
				$update = $conn->prepare($sqlUpdate);
				$update->execute();

				header('Location: display.php');
			} catch (PDOException $e) {
				echo "Gagal memasukkan data: ". $e->getMessage();
			}
		}
	}

$update = new Update();
$update->startUpdate();
?>