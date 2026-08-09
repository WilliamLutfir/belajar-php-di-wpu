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
		<h1>PDF Reporting</h1>
		<h2>Digunakan Utk :</h2>
		<ul>
			<li>Laporan</li>
			<li>Kuitansi/Invoice/Faktur</li>
			<li>Form Isian</li>
			<li>dll</li>
		</ul>
		<h2>Membuat PDF</h2>
		<ul>
			<li>Menggunakan Fitur Bawaan Browser.</li>
			<li>Library PHP</li>
			<ul>
				<li>FPDF</li>
				<li>mPDF</li>
				<li>DOMPDF</li>
				<li>dll</li>
			</ul>
		</ul>
	</body>
</html>