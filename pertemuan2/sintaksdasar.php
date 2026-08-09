<html>
	<head>
		<title>Sintaks Dasar PHP</title>
	</head>
	<body>
		<?php
			// Ini adalah single line komentar
			/* Ini adalah
			   multi line komentar */
			echo "Pertemuan 2 - PHP Dasar <br>";
			echo "<br>";
			echo "1. Sintaks PHP <br>";

			echo "<br> 2. Standar Keluaran <br>";
			echo "echo, print -> utk menampilkan statement. <br>";
			echo "print_r -> utk menampilkan nilai dari suatu larik. <br>";
			echo "var_dump -> utk menampilkan isi dan informasi dari suatu variabel. <br>";
			echo "<br>";
			echo "print_r & var_dump, biasanya dipakai utk debugging program. <br>";
			var_dump("William Lutfi");
			echo "<br>";
			echo "<br> 3. Penempatan Sintaks PHP <br>";
			echo "- PHP didalam HTML. <br>";
			echo "- HTML didalam PHP. (tdk disarankan, harus tetap dipisahkan antara tag html dgn tag php, agar tidak membingungkan).";
			echo "<h2>Ini h2 didalam php</h2>";
			echo "4. Tipedata dan Variabel <br>";
			echo "- Pada php, sebuah variabel ditandai dengan tanda $ (dollar) <br>";
			echo "- Pada php, tdk perlu mendefinisikan tipedata dari suatu variabel. <br>";
			echo "<br> 5. Interpolasi (tanda kutip pd echo) <br>";
			$nama = "William Lutfi";
			echo "Halo, nama saya $nama <br>";
			echo 'Halo, nama saya $nama <br>';
			echo "<br> 6. Operator <br>";
			echo "- Aritmatika (+, -, *, /, %) <br>";
			echo "- Penggabung String /concatenation/concat (.) <br>";
			$namaDpn = "William";
			$namaBlkg = "Harjo";
			echo $namaDpn . " " . $namaBlkg;
			echo "<br> - Penugasan (=, +=, -=, *=, /=, %=, .=) <br>";
			$nama .= " ";
			$nama .= "Rahman Harjo";
			echo $nama;
			echo "<br> - Perbandingan (<, >, <=, >=, ==, !=) <br>";
			var_dump(1>5);
			echo "<br>";
			var_dump(1=="1");
			echo "<br> - Identitas (===, !==) <br>";
			var_dump(1==="1");
			echo "<br> - Logika (&&, ||, !) <br>";
			$x=10;
			var_dump($x<20 && $x%2==0);
		?>
	</body>
</html>