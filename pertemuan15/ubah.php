<?php
	require 'fungsis.php';
	// Ambil data dari URL
	$id=$_GET["id"];

	// Query data mahasiswa berdasarkan id
	$mhs=kueri("SELECT * FROM mahasiswa WHERE id = $id")[0];

	// Cek apakah tombol(larik dgn key tekan) sudah ditekan(dibuat) atau blm.
	if(isset($_POST["tekan"])){
		// Cek affected.
		if(prnthUpdate($_POST)>0){
			echo "<script>";
				echo "alert(\"Data Berhasil Diubah!\");";
				echo "document.location.href=\"index.php\"";
			echo "</script>";
		} else{
			echo "<script>";
				echo "alert(\"Data Gagal Diubah! | ";
				echo mysqli_error($konek);
				echo "\");";
				echo "document.location.href=\"index.php\"";
			echo "</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Ubah Data Mahasiswa</title>
		<style>button,input[type=file]::-webkit-file-upload-button{cursor:pointer;}</style>
	</head>
	<body>
		<h1>Ubah Data Mahasiswa</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
			<input type="hidden" name="gambarLama" value="<?php echo $mhs["gambar"]; ?>">
			<ul>
				<li>
					<label for="Nama">Nama : </label>
					<input type="text" name="nama" id="Nama" value="<?php echo $mhs["nama"]; ?>" autocomplete="off" required>
				</li>
				<li>
					<label for="Nim">Nim : </label>
					<input type="text" name="nim" id="Nim" value="<?php echo $mhs["nim"]; ?>" autocomplete="off" required>
				</li>
				<li>
					<label for="Surel">Surel : </label>
					<input type="text" name="surel" id="Surel" value="<?php echo $mhs["surel"]; ?>" autocomplete="off" required>
				</li>
				<li>
					<label for="Jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="Jurusan" value="<?php echo $mhs["jurusan"]; ?>" autocomplete="off" required>
				</li>
				<li>
					<label for="Gambar">Gambar : </label><br>
					<img src="gmbr/<?php echo $mhs["gambar"] ?>" alt="<?php echo $mhs["gambar"] ?>" title="<?php echo $mhs["gambar"] ?>" width="100"><br>
					<input type="file" name="gambar" id="Gambar">
				</li>
				<li>
					<button type="submit" name="tekan">Ubah Data!</button>
				</li>
			</ul>
		</form>
	</body>
</html>