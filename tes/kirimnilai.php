<!DOCTYPE html>
<html lang="id">
<head>
	<title>kirim nilai javascript ke php</title>
</head>
<body>
	<!-- <script src="kirimnilai.js"></script> -->
	<?php
		$nilai = $_POST['nilai']; // Mendapatkan nilai dari JavaScript
		// Lakukan sesuatu dengan nilai tersebut
		echo "Nilai yang diterima: " . $nilai;
	?>

</body>
</html>