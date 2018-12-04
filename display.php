<?php

/**
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

	require_once ("../conn/conn.php");
	session_start();
	if(empty($_SESSION['username']) && empty($_SESSION['password'])){
		header("Location: ../log/login.php");
	}
	class Display {
			function StartDisplay(){

				// new object from conn.php
				$connection = new Connection();
				$conn = $connection->getConnection();

				// array for jason response
				$response = array();

					// display query
					try{

						$sqlInsert = "SELECT * FROM mahasiswa";
						$getAll = $conn->prepare($sqlInsert);
						$getAll->execute();

						?>


				<!DOCTYPE html>
				<html>
				<body>
						<center><table border="1" align="center">
							<tr>
                                <td colspan="6">
                                    <a href="../input/input.php">+ Tambah Data</a>
                                </td>
                            </tr>
                            <tr></tr>
							<tr>
            						<td>No</td>
									<td >Nama</td>
            						<td >NIM</td>
            						<td >Fakultas</td>
            						<td >Prodi</td>
									<td>Aksi</td>
            						</tr>
				</body>
				</html>

            			<?php foreach ($getAll as $data) { ?>
							<tr>
								<td><?php echo $data['id_mahasiswa'] ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['nim']; ?></td>
								<td><?php echo $data['fakultas']; ?></td>
								<td><?php echo $data['prodi']; ?></td>
								<td><a href="delete.php?id_mahasiswa=<?php echo $data['id_mahasiswa']?>">Delete</a>
                                    || <a href="displayupdate.php?id_mahasiswa=<?php echo $data['id_mahasiswa']?>">Update</a></td>
							</tr><?php } ?>

						</table>

					<?php

				}catch (PDOException $e){
					echo "Kesalahan ketika menampilkan data". $e->getMessage."<br>";
				}

			}
	}


	$getData = new Display();
	$getData->StartDisplay();

	?>