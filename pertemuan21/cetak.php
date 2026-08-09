<?php
session_start();
if(!isset($_SESSION["login"])){header("Location: ../login.php");}

require_once __DIR__ . '/vendor/autoload.php';
require 'fungsis.php';
$mahasiswa=kueri("SELECT * FROM mahasiswa ORDER BY nama ASC");

$html='
<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Cetak Semua Data Mahasiswa</title>
		<style>
			body{font-family: arial;}
			tr:nth-child(even){background-color: #7FFFD4}
			th{text-align: center;}
		</style>
	</head>
	<body>
		<h1>Daftar Semua Mahasiswa</h1>
		<table border="1" cellspacing="0" cellpadding="5" class="table-bordered border-black">
			<tr>
				<th>No.</th><th>Gambar</th>
				<th>Nama</th><th>Nim</th>
				<th>Surel</th><th>Jurusan</th>
			</tr>';
			$no=1;
			foreach($mahasiswa as $mhs){
				$html .= '
				<tr>
					<td style="text-align: center;">'.$no.'</td>
					<td><img src="gmbr/'.$mhs["gambar"].'" alt="'.$mhs["gambar"].'" title="'.$mhs["nama"].'" width="60px"></td>
					<td>'.$mhs["nama"].'</td>
					<td>'.$mhs["nim"].'</td>
					<td>'.$mhs["surel"].'</td>
					<td>'.$mhs["jurusan"].'</td>
				</tr>';
				$no+=1;}
$html .= '</table>
	</body>
</html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output("",/*\Mpdf\Output\Destination::INLINE*/"I");
?>