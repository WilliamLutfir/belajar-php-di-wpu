<?php
session_start();
if(!isset($_SESSION["login"])){header("Location: login.php");}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Materi</title>
	</head>
	<body>
		<table style="width: 100%;">
			<tr>
				<td>Pengguna Sedang Login : <?= ucwords($_SESSION["login"]); ?></td>
				<td><a href="keluar.php" style="display: block; text-align: right;" onclick="return confirm('Apakah <?= ucwords($_SESSION["login"]); ?> yakin ingin keluar dari akun?')">Keluar</a></td>
			</tr>
		</table>
		<p><a href="index.php">&laquo; Kembali</a></p>
		<h1>Session</h1>
		<p>"Mekanisme penyimpanan informasi ke dlm variabel agar bisa digunakan di lebih dari satu halaman."</p>
		<p>"Informasi pd session disimpan di server."</p>
		<p>Session sangat erat kaitannya dgn Cookie. Session & Cookie hampir serupa, sama" dpt menampung informasi/nilai yg dpt digunakan di berbagai halaman, bedanya Session informasi/nilai-nya disimpan di server, Cookie informasi/nilai-nya disimpan di client(browser).</p>
		<p>Informasi/nilai akan disimpan kedlm variabel super globals bernama $_SESSION.</p>
		<p>Utk mengisi nilai ke variabel $_SESSION, ada syaratnya, yaitu harus menjalankan suatu fungsi bernama session_start(), sebelum menuliskan sintaks html.</p>
		<p>Setiap ingin mengakses nilai pd variabel $_SESSION, harus menjalankan terlebih dahulu fungsi session_start().</p>
		<p>Nilai didlm $_SESSION akan tetap ada jika menutup tab halaman, sampai nilai ini akan hilang dlm satu sesi/jika browser ditutup.</p>
		<p>Fungsi bernama session_destroy() jika dipanggil, maka akan menghilangkan nilai pd $_SESSION.</p>
	</body>
</html>