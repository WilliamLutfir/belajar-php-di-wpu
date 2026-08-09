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
		<h1>Cookie</h1>
		<p>Cookie hampir mirip seperti Session, yg mna merupakan data/informasi yg dpt diakses dimana saja di halaman web.</p>
		<p>Cookie, data/informasi disimpannya di browser (client).</p>
		<p>Cookie Digunakan Untuk :</p>
		<ul>
			<li>Mengenali pengguna.</li>
			<li>Shopping cart.</li>
			<li>Personalisasi.</li>
			<li>...</li>
		</ul>
		<p>Karena Cookie data/informasi disimpannya di browser (client), pengguna dpt memanipulasi data/informasi Cookie tsb, ini dpt menjadi celah kerentanan keamanan, maka developer harus hati" dlm penggunaannya.</p>
		<p>Data/informasi Cookie di simpan pada variabel super globals $_COOKIE.</p>
		<p>Utk membuat/mengatur Cookie, dibutuhkan suatu fungsi bernama setcookie().</p>
		<p>Data/informasi Cookie akan berlaku selama satu sesi. Cookie ada waktu expired.</p>
	</body>
</html>