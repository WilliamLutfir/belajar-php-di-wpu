<html lang="id">
	<head>
		<title>Larik (Array)</title>
	</head>
	<body>
		<?php 
			$mhs=["William Lutfi Rahman Harjo","0701202183","Ilmu Komputer","701202183@uinsu.ac.id"];
			echo "<h1>Daftar Mahasiswa</h1>";
		?>
		<ul>
			<?php foreach($mhs as $mhsTggl): ?>
				<li> <?php echo $mhsTggl; ?> </li>
			<?php endforeach; ?>
		</ul>
		<ul>
			<?php foreach($mhs as $mhsTggl): ?>
				<?php echo "<li>".$mhsTggl."</li>"; ?>
			<?php endforeach; ?>
		</ul>
		<?php 
			echo "===Larik Banyak Dimensi=== <br>";
			echo "- Larik Banyak Dimensi sama artinya dengan larik didalam larik";
			$mhsMltiDmnsi=[
				["William Lutfi Rahman Harjo","0701202183","Ilmu Komputer","701202183@uinsu.ac.id"],
				["Windi Imelda Putri Hutauruk","0701202206","Ilmu Komputer","7701202206@uinsu.ac.id"],
				["Anisa Rahman","0701201172","Ilmu Komputer","701201172@uinsu.ac.id"]
			];
		?>
		<?php foreach($mhsMltiDmnsi as $mhsMltiDmnsiTggl): ?>
			<ul>
				<li>Nama : <?= $mhsMltiDmnsiTggl[0]; ?> </li>
				<li>Nim : <?= $mhsMltiDmnsiTggl[1]; ?> </li>
				<li>Prodi : <?= $mhsMltiDmnsiTggl[2]; ?> </li>
				<li>Surel : <?= $mhsMltiDmnsiTggl[3]; ?> </li>
			</ul>
		<?php endforeach; ?>
		<?php 
			echo "- Ini merupakan contoh dari <b>larik numerik</b>. <br>";
			echo "- Larik numerik adalah larik yang indexnya merupakan angka. <b>(Larik, pasangan antara key dan value)</b>. <br>";
			echo "- Larik asosiatif adalah larik yang indexnya merupakan string, utk mengasosiasikannya <b>(kerja sama/hubungan)</b> thd valuenya.";
		?>
	</body>
</html>