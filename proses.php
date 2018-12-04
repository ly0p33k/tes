<?php

// created by Sublime Text
// user : lyop 
// PHP Version 5.6.24
require_once ("../conn/conn.php");
class InputData{
	function startInputData(){

		// new object from conn.php
		$connection = new Connection();
		$conn = $connection->getConnection();

		// array for jason response
		$response = array();

		// POST from form
		$nama		= $_POST['nama'];
		$nim 		= $_POST['nim'];
		$fakultas 	= $_POST['fakultas'];
		$prodi		= $_POST['prodi'];

		try{
			if(isset($nama) && isset($nim) && isset($fakultas) && isset($prodi)){
				$sqlInsert = "INSERT INTO mahasiswa (id_mahasiswa, nama, nim, fakultas, prodi) VALUES ('','$nama','$nim','$fakultas','$prodi')";
				$conn->exec($sqlInsert);
			}
		}
			catch (PDOException $e){
				echo "Kesalahan koneksi atau query: ". $e->getMessage() . "<br>";
			}

			//cek is the row was inserted or not
			if($sqlInsert){
				// succes inserted
				echo "<script>alert ('Data berhasil ditambahkan')</script>";
				echo "<meta http-equiv='refresh' content='1 url=../display/display.php'>";

				echo json_encode($response);

			}else{
				// failed inserted
				echo "<script>alert ('Data berhasil ditambahkan')</script>";
				echo "<meta http-equiv='refresh' content='1 url=input.php'>";
				
				echo json_encode($response);
			}
	}
}

$insert = new InputData();
$insert->startInputData();
?>