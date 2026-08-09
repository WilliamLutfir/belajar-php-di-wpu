<?php
require "fungsis.php";
if(isset($_POST["login"])){
	$namapengguna=$_POST["namapengguna"];
	$katasandi=$_POST["katasandi"];
	$hasil=mysqli_query($konek,"SELECT * FROM pengguna WHERE namapengguna='$namapengguna'");

	// cek namapengguna
	// method utk mengecek ada brp baris dari hasil query yg telah dilakukan, kalau ada isinya maka nilai yg dihasilkan adalah 1 jika tdk ada maka nilai yg dihasilkan adalah 0
	if(mysqli_num_rows($hasil)===1){
		// cek katasandi
		$brs=/*mysqli_fetch_assoc($hasil)*/mysqli_fetch_row($hasil);
		// var_dump($brs);
		// utk mengecek kesamaan dari string kata sandi
		if(password_verify($katasandi,/*$brs["katasandi"]*/$brs[2])){header("Location: index.php");exit;}else{echo "<p style=\"color: red; font-style: italic;\">Kata Sandi Salah!</p>";}
	}else{echo "<p style=\"color: red; font-style: italic;\">Nama Pengguna Tidak Terdaftar!</p>";}
	// $error=true;
}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Halaman Login</title>
		<style>button{cursor:pointer;}</style> 
	</head>
	<body>
		<?php //if(isset($error)) : ?>
			<!--<p style="color: red; font-style: italic;">Nama Pengguna / Kata Sandi Salah!</p>-->
		<?php //endif; ?>
		<h1>Halaman Login</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td><label for="namaPengguna">Nama Pengguna </label></td>
					<td> : <input type="text" id="namaPengguna" name="namapengguna" autocomplete="off"></td>
				</tr>
				<tr>
					<td><label for="kataSandi">Kata Sandi </label></td>
					<td> : <input type="password" id="kataSandi" name="katasandi" autocomplete="off"></td>
				</tr>
				<tr><td><button type="submit" name="login">Masuk!</button></td></tr>
			</table>
		</form>
	</body>
</html>