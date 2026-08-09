<?php
	// koneksi ke basis data
	                    // nama host | username | password | nama basis data
	$konek=mysqli_connect("localhost","root","","phpdasardb");
	if ($konek==true){
		echo "<script>";
			echo "alert(\"Berhasil Terhubung Ke MySQL! | bool(true)\");";
		echo "</script>";
		// var_dump($konek);
		// echo "<br><br>";
	} else{
		echo "<script>";
			echo "alert(\"Gagal Terhubung Ke MySQL! | bool(false)\");";
		echo "</script>";
		var_dump($konek);
		echo "<br>".mysqli_error($konek);
	};
	// Mengambil query/data dari tabel mahasiswa
					  // koneksi | perintah query
	$hasil=mysqli_query($konek,"SELECT * FROM mahasiswa");
	if ($hasil) {
		echo var_dump($hasil)."<br>"."<b>Berhasil mengambil query!</b>";
	} else{
		echo var_dump($hasil)."<br>";
		echo mysqli_error($konek);
	}
	echo "<hr>";
	// Mengambil (Fetch) data mahasiswa dari objek $hasil
	// Tedapat 4 cara utk mengambil(fetch) data tabel dari objek $hasil :
	// mysqli_fetch_row(); -> mengembalikan nilai yaitu larik numerik.
	// mysqli_fetch_assoc(); -> mengembalikan nilai yaitu larik asosiatif.
	// mysqli_fetch_array(); -> mengembalikan nilai yaitu larik numerik & asosiatif.
	// mysqli_fetch_object(); -> mengembalikan nilai yaitu objek (tdk punya key numerik/asosiatif).

	// $ambilBaris=mysqli_fetch_row($hasil);
	// echo var_dump($ambilBaris)."<br><br>";
	// echo var_dump($ambilBaris[1])."<br>";
	// echo var_dump($ambilBaris[2])."<br>";
	// echo "<hr>";

	// $ambilAsos=mysqli_fetch_assoc($hasil);
	// echo var_dump($ambilAsos)."<br><br>";
	// echo var_dump($ambilAsos["nama"])."<br>";
	// echo var_dump($ambilAsos["nim"])."<br>";
	// echo "<hr>";

	// $ambilLarik=mysqli_fetch_array($hasil);
	// echo var_dump($ambilLarik)."<br><br>";
	// echo var_dump($ambilLarik[1])."<br>";
	// echo var_dump($ambilLarik["nim"])."<br>";
	// echo "<hr>";

	// $ambilObjek=mysqli_fetch_object($hasil);
	// echo var_dump($ambilObjek)."<br><br>";
	// echo var_dump($ambilObjek->nama)."<br>";
	// echo var_dump($ambilObjek->nim)."<br>";

	// while($mhs=mysqli_fetch_assoc($hasil)){
	// 	var_dump($mhs["nama"]);
	// 	var_dump($mhs);
	// }
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Halaman Admin</title>
	</head>
	<body>
		<!-- ctrl + d pd sublime text akan mencari dan memilih suatu kata yg bersangkutan -->
		<h1>Daftar Mahasiswa</h1>
		<table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<th>No.</th><th>Aksi</th><th>Gambar</th>
				<th>Nama</th><th>Nim</th><th>Surel</th>
				<th>Jurusan</th>
			</tr>
			<?php $no=1; ?>
			<?php while ($brs=mysqli_fetch_assoc($hasil)) : ?>
				<tr>
					<td><?php echo $no; ?>.</td>
					<td>
						<a href="">ubah</a> |
						<a href="">hapus</a>
					</td>
					<td><img src="gmbr/<?php echo $brs["gambar"]; ?>" alt="<?php echo $brs["gambar"]; ?>" title="<?php echo $brs["nama"]; ?>" width="60px"></td>
					<td><?php echo $brs["nama"]; ?></td>
					<td><?php echo $brs["nim"]; ?></td>
					<td><?php echo $brs["surel"]; ?></td>
					<td><?php echo $brs["jurusan"]; ?></td>
				</tr>
				<?php $no++; ?>
			<?php endwhile; ?>
		</table>
	</body>
</html>