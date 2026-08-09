<?php
session_start();
if(!isset($_SESSION["login"])){header("Location: ../login.php");}
if(!isset($_GET["ajax"])){header("Location: ../login.php");}
require "../fungsis.php";
$jmlhDataPerHlmn=10;
if(isset($_GET["katakunci"])){
	$jmlhSeluruhDataMhs=count(kueri(cari($_GET["katakunci"])));
	$jmlhHlmn=ceil($jmlhSeluruhDataMhs/$jmlhDataPerHlmn);
	$hlmnAktif=isset($_GET["hal"]) ? $_GET["hal"] : 1;
	$awalData=($jmlhDataPerHlmn*$hlmnAktif)-$jmlhDataPerHlmn;
	$mahasiswa=kueri(cari($_GET["katakunci"])." LIMIT $awalData,$jmlhDataPerHlmn");}
?>
<table border="1" cellspacing="0" cellpadding="5">
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
</table><br>
<?php
if(isset($_GET["katakunci"])){
	echo "<div id=\"pagination\">";
	if($hlmnAktif>1){echo "<a href=\"?katakunci=".$_GET["katakunci"]."&hal=".($hlmnAktif-1)."\"><button>&laquo;</button></a> ";}
	for($i=1;$i<=$jmlhHlmn;$i+=1){
		if($i==$hlmnAktif){echo "<a href=\"?katakunci=".$_GET["katakunci"]."&hal=".$i."\"><button style=\"font-weight: bold; color: red;\">".$i."</button></a> ";}
		else{echo "<a href=\"?katakunci=".$_GET["katakunci"]."&hal=".$i."\"><button>".$i."</button></a> ";}}
	if($hlmnAktif<$jmlhHlmn){echo "<a href=\"?katakunci=".$_GET["katakunci"]."&hal=".($hlmnAktif+1)."\"><button>&raquo;</button></a>";}
	echo "</div>";}
?>