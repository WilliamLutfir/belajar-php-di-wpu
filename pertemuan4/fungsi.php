<html lang="id">
	<head>
		<title>Fungsi</title>
	</head>
	<body>
		<?php
			echo "===Built-in function=== <br>";
			echo "<strong>Date</strong> <br>";
			echo "- date() <br>";
			echo date("l") .", ".date("M") ."<br>";
			echo date("L") .", ".date("M") ."<br>";
			echo date("d") ."-".date("m") ."<br>";
			echo date("D") ."-".date("m") ."<br>";
			echo date("l, d-M-Y") ."<br>";
			echo "<br>";
			echo "<strong>Time</strong> <br>";
			echo "- time() <br>";
			echo "UNIX Timestamp / EPOCH  time. <br>";
			echo time() ."<br>";
			echo "Ini merupakan detik yang sudah berlalu sejak 1 Januari 1970. <br>";
			echo "<br>";
			echo "Contoh untuk menghitung hari kedepan : <br>";
			echo date("l",time()+(60*60*24*3)) ."<br>";
			echo date("d M Y",time()+(60*60*24*3)) ."<br>";
			// (60*60*24*3) utk menghutung 3 hari kedepan, dimulai hari ini
			echo "<br>";
			echo "Contoh untuk menghitung hari kebelakang : <br>";
			echo date("d M Y",time()-(60*60*24*3)) ."<br>";
			echo "<br>";
			echo "<strong>mktime/(maketime)</strong> <br>";
			echo "- Membuat detik sendiri dari 1 Januari 1970 sampai detik yang diinginkan. <br>";
			echo "- Fungsi mktime bisa memiliki 6 parameter. <br>";
			// mktime(0,0,0,0,0,0);
			// jam, menit, detik, bulan, tanggal, tahun
			echo "<br>";
			echo "Ini adalah detik yang sudah berlalu dari 1 Januari 1970 sampai 26 Juni 2002 : <br>";
			echo mktime(0,0,0,6,26,2002) ."<br>";
			echo date("l",mktime(0,0,0,6,26,2002)) ."<br>";
			echo date("l, d M Y",mktime(0,0,0,6,26,2002)) ."<br>";
			echo "<br>";
			echo "<strong>strtotime</strong> <br>";
			echo "- Konsep mirip seperti mktime, tetapi fungsi strtotime parameternya berupa format string. <br>";
			echo strtotime("26 jun 2002") ."<br>";
			echo date("l",strtotime("26 jun 2002")) ."<br>";
			echo date("l, d M Y",strtotime("26 jun 2002")) ."<br>";
			echo "<br>";
			echo "<strong>String</strong> <br>";
			echo "strlen() -> utk menghitung panjang dari suatu string. <br>";
			echo "strcmp() -> utk membandingkan dua buah string. <br>";
			echo "explode() -> utk memecah suatu string menjadi larik. <br>";
			echo "- Contoh penggunaannya, ketika ingin memisahkan nama file dengan ekstensinya. <br>";
			echo "htmlspecialchars() -> fungsi utk menjaga dari hacker (enkripsi). <br>";
			echo "<br>";
			echo "<strong>Utility/(Bantuan)</strong> <br>";
			echo "var_dump() -> utk menampilkan isi dan informasi dari suatu variabel. <br>";
			echo "isset() -> utk mengecek apakah suatu variabel sudah pernah dibuat/belum. (Kemudian akan menghasilkan nilai boolean). <br>";
			echo "empty() -> utk mengecek apakah suatu variabel yang ada bernilai kosong/tidak. <br>";
			echo "die() -> utk memberhentikan aliran program. <br>";
			echo "- Jika terdapat fungsi die pada baris program, maka program dibawahnya tidak akan dieksekusi. <br>";
			echo "sleep() -> utk memberhentikan sementara aliran program (misal bbrp detik), kemudian akan dilanjutkan lagi. <br>";
			echo "<br>";
			echo "===User-defined function=== <br>";
			echo "Ada bbrp hal yang harus diperhatikan ketika membuat fungsi sendiri : <br>";
			echo "1. Fungsi harus didefinisikan terlebih dahulu. <br>";
			echo "2. Setelah didefinisikan, kemudian bisa dipanggil fungsi tsb. <br>";
			echo "3. Sebuah fungsi biasanya mengembalikan nilai, (boleh juga tidak). <br>";
			echo "4. Pd php, jika suatu fungsi yang seharusnya menerima parameter, tetapi saat pemanggilan fungsi tsb tdk diberikan parameter/kurang memberikan parameter, maka akan terjadi error. <br>";
			echo "- Ini dapat diatasi dengan memberikan nilai parameter default pd pendefinisian parameter fungsinya. <br>";
			function salam($w="Datang",$n="Admin"){ // memberikan nilai parameter default pd suatu fungsi
				return "Selamat ".$w.", ".$n." Tercinta! <br>";
			}
			echo "<h1>".salam("Pagi","William")."</h1>";
			
	
		?>
	
	</body>
</html>