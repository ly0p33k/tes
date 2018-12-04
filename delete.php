<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

	require_once ("../conn/conn.php");
	class Delete{
		function startDelete(){

			// new objeck from conn.php
			$connection = new Connection();
			$conn = $connection->getConnection();

			// array for jason response
			$response = array();

			$id_mahasiswa = $_GET['id_mahasiswa'];

			// delete data
			try{
				$sqlDelete = "DELETE FROM mahasiswa WHERE id_mahasiswa=$id_mahasiswa";
				$delete = $conn->prepare($sqlDelete);
				$delete->execute();

				header('Location: ../display/display.php');
			} catch (PDOException $e) {
				echo "Gagal menghapus data: ". $e->getMessage();
			}
		}
	}

$delete = new Delete();
$delete->startDelete();

?>