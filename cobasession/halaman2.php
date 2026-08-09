<?php
session_start(); 
echo $_SESSION["nama"];
// session_destroy();
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Halaman2</title>
	</head>
	<body>
		<br><a href="halaman3.php">Pergi Ke Halaman3!</a>
		
	</body>
</html>