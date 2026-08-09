<?php
	session_start();
	if(!isset($_SESSION["login"])){header("Location: login.php");}
	// Ada sedikit perbedaan antara require & include
	require 'fungsis.php';
	// pagination
	// konfigurasi
	$jmlhDataPerHlmn=10;
	if( (!isset($_GET["katakunci"])) && (!isset($_GET["order"])) ){
		$jmlhSeluruhDataMhs=count(kueri("SELECT * FROM mahasiswa"));
		// jumlah halaman = total data / data per halaman
		$jmlhHlmn=ceil($jmlhSeluruhDataMhs/$jmlhDataPerHlmn);
		$hlmnAktif=isset($_GET["hal"]) ? $_GET["hal"] : 1;
		$awalData=($jmlhDataPerHlmn*$hlmnAktif)-$jmlhDataPerHlmn;
		                                             // data mulai dari index ke-brp
		$mahasiswa=kueri("SELECT * FROM mahasiswa LIMIT $awalData,$jmlhDataPerHlmn");
	                                                           // mau berapa data yg ditampilkan
		echo "<div id=\"pagination\">";
		if($hlmnAktif>1){echo "<a href=\"?hal=".($hlmnAktif-1)."\"><button>&laquo;</button></a> ";}
		for($i=1;$i<=$jmlhHlmn;$i+=1){
			if($i==$hlmnAktif){echo "<a href=\"?hal=".$i."\"><button style=\"font-weight: bold; color: red;\">".$i."</button></a> ";}
			else{echo "<a href=\"?hal=".$i."\"><button>".$i."</button></a> ";}}
		if($hlmnAktif<$jmlhHlmn){echo "<a href=\"?hal=".($hlmnAktif+1)."\"><button>&raquo;</button></a>";}
		echo "</div>";}

	// Jika tombol cari diklik
	if(isset($_GET["katakunci"])){
		$jmlhSeluruhDataMhs=count(kueri(cari($_GET["katakunci"])));
		$jmlhHlmn=ceil($jmlhSeluruhDataMhs/$jmlhDataPerHlmn);
		$hlmnAktif=isset($_GET["hal"]) ? $_GET["hal"] : 1;
		$awalData=($jmlhDataPerHlmn*$hlmnAktif)-$jmlhDataPerHlmn;
		$mahasiswa=kueri(cari($_GET["katakunci"])." LIMIT $awalData,$jmlhDataPerHlmn");
		echo "<div id=\"pagination\">";
		if($hlmnAktif>1){echo "<a href=\"?katakunci=".$_GET["katakunci"]."&hal=".($hlmnAktif-1)."\"><button>&laquo;</button></a> ";}
		for($i=1;$i<=$jmlhHlmn;$i+=1){
			if($i==$hlmnAktif){echo "<a href=\"?katakunci=".$_GET["katakunci"]."&hal=".$i."\"><button style=\"font-weight: bold; color: red;\">".$i."</button></a> ";}
			else{echo "<a href=\"?katakunci=".$_GET["katakunci"]."&hal=".$i."\"><button>".$i."</button></a> ";}}
		if($hlmnAktif<$jmlhHlmn){echo "<a href=\"?katakunci=".$_GET["katakunci"]."&hal=".($hlmnAktif+1)."\"><button>&raquo;</button></a>";}
		echo "</div>";}

	// Jika tombol ascending diklik
	if(isset($_GET["order"]) && ($_GET["order"]==="asc")){
		$jmlhSeluruhDataMhs=count(kueri("SELECT * FROM mahasiswa ORDER BY nama ASC"));
		$jmlhHlmn=ceil($jmlhSeluruhDataMhs/$jmlhDataPerHlmn);
		$hlmnAktif=isset($_GET["hal"]) ? $_GET["hal"] : 1;
		$awalData=($jmlhDataPerHlmn*$hlmnAktif)-$jmlhDataPerHlmn;
		$mahasiswa=kueri("SELECT * FROM mahasiswa ORDER BY nama ASC LIMIT $awalData,$jmlhDataPerHlmn");
		echo "<div id=\"pagination\">";
		if($hlmnAktif>1){echo "<a href=\"?order=".$_GET["order"]."&hal=".($hlmnAktif-1)."\"><button>&laquo;</button></a> ";}
		for($i=1;$i<=$jmlhHlmn;$i+=1){
			if($i==$hlmnAktif){echo "<a href=\"?order=".$_GET["order"]."&hal=".$i."\"><button style=\"font-weight: bold; color: red;\">".$i."</button></a> ";}
			else{echo "<a href=\"?order=".$_GET["order"]."&hal=".$i."\"><button>".$i."</button></a> ";}}
		if($hlmnAktif<$jmlhHlmn){echo "<a href=\"?order=".$_GET["order"]."&hal=".($hlmnAktif+1)."\"><button>&raquo;</button></a>";}
		echo "</div>";}

	// Jika tombol descending diklik
	if(isset($_GET["order"]) && ($_GET["order"]==="desc")){
		$jmlhSeluruhDataMhs=count(kueri("SELECT * FROM mahasiswa ORDER BY nama DESC"));
		$jmlhHlmn=ceil($jmlhSeluruhDataMhs/$jmlhDataPerHlmn);
		$hlmnAktif=isset($_GET["hal"]) ? $_GET["hal"] : 1;
		$awalData=($jmlhDataPerHlmn*$hlmnAktif)-$jmlhDataPerHlmn;
		$mahasiswa=kueri("SELECT * FROM mahasiswa ORDER BY nama DESC LIMIT $awalData,$jmlhDataPerHlmn");
		echo "<div id=\"pagination\">";
		if($hlmnAktif>1){echo "<a href=\"?order=".$_GET["order"]."&hal=".($hlmnAktif-1)."\"><button>&laquo;</button></a> ";}
		for($i=1;$i<=$jmlhHlmn;$i+=1){
			if($i==$hlmnAktif){echo "<a href=\"?order=".$_GET["order"]."&hal=".$i."\"><button style=\"font-weight: bold; color: red;\">".$i."</button></a> ";}
			else{echo "<a href=\"?order=".$_GET["order"]."&hal=".$i."\"><button>".$i."</button></a> ";}}
		if($hlmnAktif<$jmlhHlmn){echo "<a href=\"?order=".$_GET["order"]."&hal=".($hlmnAktif+1)."\"><button>&raquo;</button></a>";}
		echo "</div>";}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Halaman Admin</title>
		<style>button{cursor:pointer;}</style>
		<script src="js/skrip.js" defer></script>
	</head>
	<body>
		<table style="width: 100%;">
			<tr>
				<td>Pengguna Sedang Login : <?= ucwords($_SESSION["login"]); ?></td>
				<td><a href="keluar.php" style="display: block; text-align: right;" onclick="return confirm('Apakah <?= ucwords($_SESSION["login"]); ?> yakin ingin keluar dari akun?')">Keluar</a></td>
			</tr>
		</table>
		<h1>Daftar Mahasiswa</h1>
		<a href="tambah.php">Tambah Data Mahasiswa</a> <ul style="display:inline-block;list-style-type:none;"><li><a href="materi.php">Materi</a></li></ul>
		<form action="" method="GET">
			<input type="text" name="katakunci" size="40" autocomplete="off" placeholder="Masukkan kata kunci pencarian..." id="katakunci" autofocus> <button type="submit" id="cari">Cari</button>
		</form><br>
		<div id="wadah"><table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<th>No.</th><th>Aksi</th><th>Gambar</th>
				<th>Nama <a href="?order=asc"><button>↑</button></a> <a href="?order=desc"><button>↓</button></a></th>
				<th>Nim</th><th>Surel</th>
				<th>Jurusan</th>
			</tr>
			<?php $no=1; ?>
			<?php foreach($mahasiswa as $mhs) : ?>
				<tr>
					<td>
						<?php if($hlmnAktif==1) : ?>
							<?php echo $no; ?>.
						<?php else : ?>
							<?php echo $no==10 ? $hlmnAktif."0" : ($hlmnAktif-1).$no; ?>.
						<?php endif ?>
					</td>
					<td>
						<a href="ubah.php?id=<?php echo $mhs["id"]; ?>"><button>ubah</button></a> |
						<form action="hapus.php" method="POST" style="display: inline-block;"><!-- <input type="hidden" name="id" value="<?php //echo $mhs["id"]; ?>"> --><button type="submit" name="tekan" value="<?php echo $mhs["id"];?>" onclick="return confirm('Apakah anda yakin ingin hapus mahasiswa bernama <?=$mhs["nama"];?>?')">hapus</button></form>
					</td>
					<td><img src="gmbr/<?php echo $mhs["gambar"]; ?>" alt="<?php echo $mhs["gambar"]; ?>" title="<?php echo $mhs["nama"]; ?>" width="60px"></td>
					<td><?php echo $mhs["nama"]; ?></td>
					<td><?php echo $mhs["nim"]; ?></td>
					<td><?php echo $mhs["surel"]; ?></td>
					<td><?php echo $mhs["jurusan"]; ?></td>
				</tr>
				<?php $no+=1; ?>
			<?php endforeach; ?>
		</table><br></div>
	</body>
</html>