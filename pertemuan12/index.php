<?php
	// Ada sedikit perbedaan antara require & include
	require 'fungsis.php';
	$mahasiswa=kueri("SELECT * FROM mahasiswa");

	// Jika tombol cari diklik
	if(isset($_POST["cari"])){
		$mahasiswa=cari($_POST["katakunci"]);
	}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Halaman Admin</title>
		<style>button{cursor:pointer;}</style>
	</head>
	<body>
		<!-- ctrl + d pd sublime text akan mencari dan memilih suatu kata yg bersangkutan -->
		<p>- Memisahkan program logik dengan tampilan, merupakan hal yg penting nnti jika belajar mengenai MVC (Model View Controller) atau Web Application Framework seperti : codeigniter, laravel, yg telah menerapkan konsep MVC.</p>
		<h1>Daftar Mahasiswa</h1>
		<a href="tambah.php">Tambah Data Mahasiswa</a> <ul style="display:inline-block;list-style-type:none;"><li><a href="materi.php">Materi</a></li></ul>
		<form action="" method="POST">
			<input type="text" name="katakunci" size="40" autocomplete="off" placeholder="Masukkan kata kunci pencarian..." autofocus> <button type="submit" name="cari">Cari</button>
		</form><br>
		<table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<th>No.</th><th>Aksi</th><th>Gambar</th>
				<th>Nama</th><th>Nim</th><th>Surel</th>
				<th>Jurusan</th>
			</tr>
			<?php $no=1; ?>
			<?php foreach($mahasiswa as $mhs) : ?>
				<tr>
					<td><?php echo $no; ?>.</td>
					<td>
						<a href="ubah.php?id=<?php echo $mhs["id"]; ?>">ubah</a> |
						<a href="hapus.php?id=<?php echo $mhs["id"]; ?>" 
							<?php echo "onclick=\"return confirm('Apakah anda yakin ingin hapus mahasiswa bernama ".$mhs["nama"]."?')\""; ?> >hapus</a>
					</td>
					<td><img src="gmbr/<?php echo $mhs["gambar"]; ?>" alt="<?php echo $mhs["gambar"]; ?>" title="<?php echo $mhs["nama"]; ?>" width="60px"></td>
					<td><?php echo $mhs["nama"]; ?></td>
					<td><?php echo $mhs["nim"]; ?></td>
					<td><?php echo $mhs["surel"]; ?></td>
					<td><?php echo $mhs["jurusan"]; ?></td>
				</tr>
				<?php $no++; ?>
			<?php endforeach; ?>
		</table>
	</body>
</html>