<?php
require "fungsis.php";
if(isset($_POST["registrasi"])){
	if(registrasi($_POST)>0){
		echo "<script>alert('Pengguna Baru Berhasil Ditambahkan!')</script>";
	}else{echo mysqli_error($konek);}
}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Halaman Registrasi</title>
		<style>
			button{cursor: pointer;}
		</style>
	</head>
	<body>
		<h1>Halaman Registrasi</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td><label for="namaPengguna">Nama Pengguna </label></td>
					<td>: <input id="namaPengguna" name="namapengguna" type="text" autocomplete="off"></td>
				</tr>
				<tr>
					<td><label for="kataSandi">Kata Sandi </label></td>
					<td>: <input id="kataSandi" name="katasandi" type="password" autocomplete="off"></td>
				</tr>
				<tr>
					<td><label for="kataSandi2">Konfirmasi Kata Sandi </label></td>
					<td>: <input id="kataSandi2" name="katasandi2" type="password" autocomplete="off"></td>
				</tr>
				<tr><td><button type="submit" name="registrasi">Registrasi!</button></td></tr>
			</table>
		</form>	
	</body>
</html>