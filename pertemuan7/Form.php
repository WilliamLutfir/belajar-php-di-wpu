<html lang="id">
	<head>
		<title>Form</title>
	</head>
	<body>
		<form action="Form2.php" method="post">
			<!-- Ada nilai default utk action&method jika tidak diisi. -->
			<!-- Jika atribut action tdk diisi nilai, maka data akan dikirim ke halaman saat ini. -->
			<!-- Jika atribut method tdk diisi nilai, maka nilai defaultnya adalah get. -->
			Nama : <input type="text" name="nama">
			<!-- atribut name pd text box, akan menjadi key di larik asosiatif $_POST -->
			<br>
			<button type="submit" name="tekan">Kirim!</button>
		</form>
	</body>
</html>