<html lang="id">
	<head>
		<title>Larik Asosiatif</title>
		<style>
			.kotak{
				width: 30px;
				height: 30px;
				background-color: #BADA55;
				text-align: center;
				line-height: 30px;
				margin: 3px;
				float: left;
				transition: 1s;
			}
			.kotak:hover{
				transform: rotate(360deg); /*membuat efek rotasi*/
				border-radius: 50%;
				background-color: red;
				color: white;
			}
			.bersih{
				clear: left;
			}
		</style>
	</head>
	<body>
		<?php 
			$angka=[1,2,3,4,5,6,7,8,9];
			$angkaMltiDmnsi=[[1,2,3],[4,5,6],[7,8,9]];
		?>
		<?php foreach($angka as $angkaTggl): ?>
			<div class="kotak">	<?= $angkaTggl ?> </div>
		<?php endforeach; ?>
		<br><br><br>
		<div class="kotak">	<?= $angkaMltiDmnsi[1][1] ?> </div>
		<div class="kotak">	<?= $angkaMltiDmnsi[2][2] ?> </div>
		<br><br><br>
		<?php foreach($angkaMltiDmnsi as $angkaMltiDmnsiTggl): ?>
			<?php foreach($angkaMltiDmnsiTggl as $Tggl): ?>
				<div class="kotak">	<?= $Tggl ?> </div>
			<?php endforeach; ?>
			<div class="bersih"></div>
		<?php endforeach; ?>
		<h1>Daftar Mahasiswa</h1>
		<?php
			$mhsMltiDmnsi=[
				["William Lutfi Rahman Harjo","0701202183","Ilmu Komputer","701202183@uinsu.ac.id"],
				["Windi Imelda Putri Hutauruk","0701202206","Ilmu Komputer","701202206@uinsu.ac.id"],
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
			echo "- Larik asosiatif adalah larik yang indexnya merupakan string <b>(yg dibuat oleh programmer)</b>, utk mengasosiasikannya <b>(kerja sama/hubungan)</b> thd valuenya. <br>";
			$mhsMltiDmnsi2=[
				["nama"=>"Siti Saniah","nim"=>"0701201091","jur"=>"Ilmu Komputer","surel"=>"701201091@uinsu.ac.id","gmbr"=>"Saniah.png"],
				["nama"=>"Almanna Hussein","nim"=>"0701201212","jur"=>"Ilmu Komputer","surel"=>"701201212@uinsu.ac.id","tugas"=>[75,75,70],"gmbr"=>"Almanna.png"],
				["nama"=>"William Lutfi Rahman Harjo","nim"=>"0701202183","jur"=>"Ilmu Komputer","surel"=>"701202183@uinsu.ac.id","gmbr"=>"William.png"]
			];
			echo "<br>";
			echo "Nilai tugas Almanna = ".$mhsMltiDmnsi2[1]["tugas"][2]; 
		?>
		<h1>Daftar Mahasiswa</h1>
		<?php foreach($mhsMltiDmnsi2 as $mhsMltiDmnsi2Tggl): ?>
		<ul>
			<li> <img src="gmbr/<?= $mhsMltiDmnsi2Tggl["gmbr"] ?>" alt="<?= $mhsMltiDmnsi2Tggl["nama"] ?>" title="<?= $mhsMltiDmnsi2Tggl["nama"] ?>"> </li>
			<li>Nama : <?= $mhsMltiDmnsi2Tggl["nama"]; ?> </li>
			<li>Nim : <?= $mhsMltiDmnsi2Tggl["nim"]; ?> </li>
			<li>Prodi : <?= $mhsMltiDmnsi2Tggl["jur"]; ?> </li>
			<li>Surel : <?= $mhsMltiDmnsi2Tggl["surel"]; ?> </li>
		</ul>
		<?php endforeach; ?>
	</body>
</html>