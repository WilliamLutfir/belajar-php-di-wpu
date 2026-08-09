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
	</head>
	<body>
		<h1>Ubah Data Mahasiswa</h1>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
			<ul>
				<li>
					<label for="Nama">Nama : </label>
					<input type="text" name="nama" id="Nama" required value="<?php echo $mhs["nama"]; ?>">
				</li>
				<li>
					<label for="Nim">Nim : </label>
					<input type="text" name="nim" id="Nim" required value="<?php echo $mhs["nim"]; ?>">
				</li>
				<li>
					<label for="Surel">Surel : </label>
					<input type="text" name="surel" id="Surel" required value="<?php echo $mhs["surel"]; ?>">
				</li>
				<li>
					<label for="Jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="Jurusan" required value="<?php echo $mhs["jurusan"]; ?>">
				</li>
				<li>
					<label for="Gambar">Gambar : </label>
					<input type="text" name="gambar" id="Gambar" required value="<?php echo $mhs["gambar"]; ?>">
				</li>
				<li>
					<button type="submit" name="tekan">Ubah Data!</button>
				</li>
			</ul>
		</form>
	</body>
</html>