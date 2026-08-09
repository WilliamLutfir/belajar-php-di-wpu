<html lang="id">
	<head>
		<title>Form Halaman Saat Ini</title>
	</head>
	<body>
		<?php if(isset($_POST["tekan"])): ?>
			<h1>Halo, Selamat Datang <?= $_POST["nama"] ?></h1>
		<?php endif; ?>
		<form action="" method="post">
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