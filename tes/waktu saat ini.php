<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
  // Menetapkan zona waktu yang diinginkan
  date_default_timezone_set('Asia/Jakarta');

  // Mendapatkan tanggal dan waktu saat ini
  $tanggal_waktu = date("l d-M-Y H:i");

  // Menampilkan tanggal dan waktu
  echo "Tanggal dan Waktu Hari Ini: " . $tanggal_waktu;
?>






	
</body>
</html>