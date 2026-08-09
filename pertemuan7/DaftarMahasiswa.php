<html lang="id">
	<head>
		<title>Daftar Mahasiswa</title>
	</head>
	<body>
		<h1>Daftar Mahasiswa</h1>
		<?php 
			$mhss=[
				["nama"=>"William Lutfi Rahman Harjo","nim"=>"0701202183","jur"=>"Ilmu Komputer","surel"=>"701202183@uinsu.ac.id","gmbr"=>"William.png"],
				["nama"=>"Irwan Gunawan","nim"=>"0701201002","jur"=>"Ilmu Komputer","surel"=>"701201002@uinsu.ac.id","gmbr"=>"Irwan.png"]
			];
		?>
		<ul>
			<?php foreach ($mhss as $mhs): ?>
				<li><a href="DetailMahasiswa.php?gmbr=<?= $mhs["gmbr"] ?>&nama=<?= $mhs["nama"] ?>&nim=<?= $mhs["nim"] ?>&jur=<?= $mhs["jur"] ?>&surel=<?= $mhs["surel"] ?>"><?= $mhs["nama"] ?></a><b> url memiliki batas jumlah dari karakter!</b></li>
			<?php endforeach; ?>
		</ul>
		<?php var_dump($_GET); ?>
	</body>
</html>