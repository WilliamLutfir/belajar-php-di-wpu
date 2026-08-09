<html lang="id">
	<head>
		<title>Get dan Post</title>
	</head>
	<body>
		<?php
			echo "<b>Metode Permintaan (Request Method)</b> <br>";
			echo "- Get dan Post <br><br>";
			echo "<b>Superglobals</b>, adalah variabel bawaan yang dimiliki oleh php (variabel khusus/spesial). <br>";
			echo "- Variabel2 superglobals dapat diakses di ruang lingkup manapun dan kapanpun. <br>";
			echo "- Variabel2 superglobals merupakan <b>larik asosiatif</b>. <br>";
			echo "Contoh variabel2 superglobals  :";
			echo "<ol>";
				echo '<li> <b>$_GET</b> </li>';
				echo '<li> <b>$_POST</b> </li>';
				echo '<li> <b>$_REQUEST</b> </li>';
				echo '<li> <b>$_SESSION</b> </li>';
				echo '<li> <b>$_COOKIE</b> </li>';
				echo '<li> <b>$_SERVER</b> </li>';
				echo '<li> <b>$_ENV (Environment)</b> </li>';
			echo "</ol>";
			echo "Menampilkan variabel superglobals yang merupakan larik asosiatif : <br>";
			echo '- var_dump($_GET) = ';
			var_dump($_GET);
			echo "<br>";
			echo '- var_dump($_POST) = ';
			var_dump($_POST);
			echo "<br>";
			echo '- $_SERVER["HTTP_REFERER"] = ';
			echo $_SERVER["HTTP_REFERER"];
			echo "<br><br>";
			echo '===<b>$_GET</b>=== <br>';
			$_GET["nama"]="William Lutfi";
			$_GET["nim"]="0701202183";
			var_dump($_GET);
			echo "<br><br>";
			echo "Mengirim masukan menggunakan <b>Metode Request GET :</b> <br>";
			echo "- Mengirim data dengan Metode Request GET melalui <b>url</b>. <br>";
			echo '- Jika ingin <b>mengirim masukan kedalam variabel $_GET</b> pada <b>halaman ini</b>, tambahkan tanda <b>?</b> diakhir link pada halaman ini! <br>';
			echo '- Jika ingin <b>mengirim masukan lebih dari 1 kedalam variabel $_GET</b>, tambahkan tanda <b>&</b>! <br>';
			echo '- <b>Data</b> yang ada didalam <b>variabel $_GET</b>, <b>tidak akan bertahan lama</b>. Variabel $_GET akan bernilai kosong kembali jika beralih ke halaman web lainnya tanpa mengirim data dengan Metode Request GET. <br>';
			echo "<br>";
			echo '===<b>$_POST</b>=== <br>';
			echo "Mengirim masukan menggunakan <b>Metode Request POST :</b> <br>";
			echo "- Mengirim data dengan Metode Request POST melalui <b>form</b>. <br>";
			echo "- <b>Form</b> bisa menggunakan kedua <b>Metode Request GET&POST</b>. <br>";
			echo "- Data yang dikirimkan dengan Metode Request POST, <b>data tidak akan terlihat</b>.<br>";
			echo "<br>";
			echo "<b>Variabel Scope</b>, adalah ruang lingkup dari sebuah variabel didalam bahasa pemrograman php. <br><br>";
			$x=10;
			function TampilX(){
				$x=20;
				echo "\$x = ".$x.", ini contoh dari <b>variabel lokal</b>.";
			}
			TampilX();
			echo "<br>";
			echo "\$x = ".$x.", ini contoh dari <b>variabel global</b>.";
			echo "<br><br>";
			function TampilX2(){
				global $x;
				echo "\$x = ".$x.", ini nilai yang diambil dari <b>variabel global</b>.";
			}
			TampilX2();
		?>
		
	</body>
</html>