<html lang="id">
	<head>
		<title>Larik (Array)</title>
		<style>
			.kotak{
				width: 50px;
				height: 50px;
				background-color: salmon;
				text-align: center;
				line-height: 50px;
				margin: 3px;
				float: left;
			}
			.bersih{
				clear: left;
			}
		</style>
	</head>
	<body>
		<?php
			echo "===Larik (Array)=== <br>";
			echo "- Larik pd php, banyak digunakan pd saat terhubung ke basis data. <br>";
			echo "- Larik secara singkat ialah, hampir mirip seperti variabel, dapat menampung lebih dari satu nilai dalam satu buah larik. <br>";
			echo "- <b>Nilai</b> yg terdpt didlm larik dpt disebut juga dgn <b>elemen</b> larik.<br>";
			echo "- Elemen larik dpt diisi dgn berbeda tipe data.<br>";
			echo "- Larik, pasangan antara key dan value. <br>";
			echo "- key merupakan index, yang dimulai dari 0. <br>";
			echo "<br>";
			echo "===Cara mendeklarasi larik=== <br>";
			echo "-<b> Cara lama</b> : <br>";
			// $hari=array("elemen","elemen")
			echo "\$hari=array(elemen,elemen) <br>";
			$hari=array("Senin","Selasa","Rabu","Kamis");
			echo "-<b> Cara baru</b> : <br>";
			// $bulan=["elemen","elemen"]
			echo "\$bulan=[elemen,elemen]<br>";
			$bulan=["Januari","Februari","Maret","April","Mei","Juni"];
			$campur=[123,"Kata",true];
			echo "<br>";
			echo "===Mengakses keseluruhan elemen larik=== <br>";
			echo "- Menggunakan var_dump() <br>";
			var_dump($hari);
			echo "<br><br>";
			echo "- Menggunakan print_r() <br>";
			print_r($bulan);
			echo "<br><br>";
			echo "===Mengakses elemen larik yang diinginkan=== <br>";
			echo $campur[0].", ".$campur[1].", ".$campur[2]."<br>";
			echo $hari[0].", ".$hari[1].", ".$hari[2]."<br>";
			echo $bulan[0].", ".$bulan[1].", ".$bulan[2]."<br>";
			echo "<br>";
			echo "===Menambahkan elemen baru pd larik yang sudah dideklarasikan dan juga diassingn===";
			echo "<br>";
			var_dump($hari);
			echo "<br><br>";
			echo "Menambahkan elemen baru pd larik, diurutan terakhir. <br>";
			$hari[]="Jum'at";
			$hari[]="Sabtu";
			var_dump($hari);
			echo "<br><br>";
			echo "===Perulangan pada larik=== <br>";
			$angka=[3,2,15,20,11,77,89,88,1,45];
			echo "-<b>Menggunakan for</b> : <br>";
		?>
		<?php for($i=0;$i<count($angka);$i+=1): ?>
			<div class="kotak"> <?php echo $angka[$i]; ?> </div>
		<?php endfor; ?>
		<div class="bersih"></div>
		<?php
			echo "count() -> Perintah utk menghitung jumlah elemen pd suatu larik. <br>";
			echo "<br>";
			echo "-<b>Menggunakan foreach</b> : <br>";
		?>
		<?php foreach($angka as $a): ?>  
			<div class="kotak"> <?= $a; ?> </div>
		<?php endforeach; ?>
		<div class="bersih"></div>
		<?php echo "foreach(\$suatuLarikYgInginDiLoop as \$variabelUtkTiap2ElemenLarikYgSdgDiLoop), artinya utk setiap elemen yg ada didlm suatu larik, kemudian lakukan sesuatu. <br>";
			  echo"- Dgn menggunakan perulangan foreach(), utk menampilkan setiap elemen dari suatu larik, tdk perlu lagi mengikuti struktur perulangan for (biasa/pd umumnya). <br>";
			  echo "- Perulangan foreach() khusus digunakan utk <b>perulangan larik</b>. <br>";
		?>
	</body>
</html>