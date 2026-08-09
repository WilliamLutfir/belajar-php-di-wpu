<!DOCTYPE html>
<html lang="id">
	<head>
		<title>MySQL</title>
	</head>
	<body>
		<?php
			echo "<h1>MySQL</h1>";
			echo "Untuk menghubungkan PHP dgn MySQL terdpt tiga cara :";
			echo "<ol>";
				echo "<li>Ekstensi/Driver MySQL.</li>";
				echo "<li>Ekstensi MySQLi.</li>";
				echo "<li>PDO (PHP Data Objek).</li>";
			echo "</ol>";
			echo "<b>Ekstensi/Driver MySQL</b>";
			echo "<ul>";
				echo "<li><b>Jangan lagi menggunakan ekstensi/driver MySQL!</b> karena itu versi lama, sudah tdk diperbarui dan banyak celah pada keamanannya.</li>";
			echo "</ul>";
			echo "<b>Ekstensi MySQLi</b>";
			echo "<ul>";
				echo "<li><b>Ini yang akan digunakan!</b></li>";
				echo "<li>i, kepanjangannya <em>improve</em>, yang artinya sudah ditingkatkan.</li>";
			echo "</ul>";
			echo "<b>PDO (PHP Data Objek)</b>";
			echo "<ul>";
				echo "<li>Driver utk terhubung ke banyak basis data/DBMS.</li>";
			echo "</ul>";
		?>
	</body>
</html>