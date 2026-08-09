<?php
	require 'fungsis.php';
	// Cek apakah tombol(larik dgn key tekan) sudah ditekan(dibuat) atau blm.
	if(isset($_POST["tekan"])){
		// var_dump($_POST);
		// var_dump($_FILES); die;
		// Cek affected.
		if(prnthInsert($_POST)>0){
			echo "<script>";
				echo "alert('Data Berhasil Masuk!');";
				echo "document.location.href='index.php'";
			echo "</script>";
		} else{
			echo "<script>";
				echo "alert('Data Gagal Masuk!');";
				echo "document.location.href='index.php';";
			echo "</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Tambah Data Mahasiswa</title>
		<style>button,input[type=file]::-webkit-file-upload-button{cursor:pointer;}</style>
	</head>
	<body>
		<h1>Tambah Data Mahasiswa</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<ul>
				<li>
					<label for="Nama">Nama : </label>
					<input type="text" name="nama" id="Nama" autocomplete="off" required>
				</li>
				<li>
					<label for="Nim">Nim : </label>
					<input type="text" name="nim" id="Nim" autocomplete="off" required>
				</li>
				<li>
					<label for="Surel">Surel : </label>
					<input type="text" name="surel" id="Surel" autocomplete="off" required>
				</li>
				<li>
					<label for="Jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="Jurusan" autocomplete="off" required>
				</li>
				<li>
					<label for="Gambar">Gambar : </label>
					<input type="file" name="gambar" id="Gambar">
				</li>
				<li>
					<button type="submit" name="tekan">Tambah Data!</button>
				</li>
			</ul>
		</form>
	</body>
</html>