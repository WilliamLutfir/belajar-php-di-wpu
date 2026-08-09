<?php
session_start();
if(!isset($_SESSION["login"])){header("Location: login.php");}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Materi</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
		<style>body{margin:8px;}</style>
	</head>
	<body>
		<table style="width: 100%;">
			<tr>
				<td>Pengguna Sedang Login : <?= ucwords($_SESSION["login"]); ?></td>
				<td><a href="keluar.php" style="display: block; text-align: right;" onclick="return confirm('Apakah <?= ucwords($_SESSION["login"]); ?> yakin ingin keluar dari akun?')">Keluar</a></td>
			</tr>
		</table>
		<p><a href="index.php">&laquo; Kembali</a></p>
		<h1>AJAX (Asynchronous Javascript And XML)</h1>
		<h2>Synchronous</h2>
		<img src="gmbr/Synchronous.PNG" alt="Synchronous.PNG" width="450">
		<p>Gambar diatas adalah diagram dari mekanisme request & response suatu website dgn metode synchronous.</p>
		<p>Pd saat request sesuatu ke server, server akan mengolah permintaan dan memberikan response berupa file html.</p>
		<p>Selama server memproses permintaan, client side disuruh menunggu bahwa request sdg dikerjakan oleh server.</p>
		<p>Sehingga ada saatnya halaman web mengedip, baru menampilkan konten web, karena yg dikembalikan oleh server adalah semua isi dari file html.</p>
		<p>Proses ini mengakibatkan cenderung memakan waktu yang lama, meskipun yg diminta client side hanya sedikit datanya, tetapi server akan tetap mengembalikan semua isi dari file html.</p>
		<h2>Asynchronous</h2>
		<img src="gmbr/Asynchronous.PNG" alt="Asynchronous.PNG" width="450">
		<p>Dgn Asynchronous, server hanya akan mengembalikan sebagian kecil/bagian tertentu pd halaman website, maka proses akan hanya memakan waktu yg singkat, server tdk perlu mengembalikan semua isi dari file html/mereload seluruh halaman web.</p>
		<h2>Objek AJAX / XMLHttpRequest()</h2>
		<p>Utk menggunakan teknik ajax, dibutuhkan sebuah objek pd browser yg bernama XMLHttpRequest().</p>
	</body>
</html>