<html lang="id">
	<head>
		<title>Form Get</title>
	</head>
	<body>
		<form action="FormGet2.php" method="get">
			<!-- Ada nilai default utk action&method jika tidak diisi. -->
			Nama : <input type="text" name="nama">
			<!-- atribut name pd text box, akan menjadi key di larik asosiatif $_POST -->
			<br>
			<button type="submit" name="tekan">Kirim!</button>
		</form>
	</body>
</html>