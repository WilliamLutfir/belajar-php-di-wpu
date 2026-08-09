<?php 
	// Algoritma yg digunakan utk memindahkan paksa user ke suatu halaman lainnya (Redirect).
	if(!isset($_GET["nama"])||!isset($_GET["gmbr"])||!isset($_GET["nim"])||!isset($_GET["jur"])||!isset($_GET["surel"])){
		header("Location: DaftarMahasiswa.php");
		exit;
	}
?>
<html lang="id">
	<head>
		<title>Detail <?= $_GET["nama"]; ?></title>
	</head>
	<body>
		<h1>Detail Dari <?= $_GET["nama"]; ?></h1>
		<ul>
			<li><img src="gmbr/<?= $_GET["gmbr"]; ?>" alt="<?= $_GET["gmbr"]; ?>" title="<?= $_GET["nama"]; ?>"></li>
			<li>Nama : <?= $_GET["nama"]; ?></li>
			<li>Nim : <?= $_GET["nim"]; ?></li>
			<li>Jurusan : <?= $_GET["jur"]; ?></li>
			<li>Surel : <?= $_GET["surel"]; ?></li>
		</ul>
		<?php var_dump($_GET); echo "<br><br>"; ?>
		<a href="DaftarMahasiswa.php">Kembali ke Daftar Mahasiswa</a>
	</body>
</html>