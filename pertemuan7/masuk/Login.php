<?php
	if(isset($_POST["tekan"])){
		if($_POST["namaUser"]=="Admin"&&$_POST["sandi"]=="admin123"){
			header("Location: Admin.php");
			exit;
		} else{
			$salah=true;
		}
	} 
?>
<html lang="id">
	<head>
		<title>Login</title>
	</head>
	<body>
		<h1>Masuk Admin</h1>
		<?php if(isset($salah)): ?>
			<p style="color: red; font-style: italic;">Nama Pengguna / Kata Sandi salah!</p>
		<?php endif; ?>
		<form action="" method="post">
			<table border="0" cellspacing="0" cellpadding="5">
				<tr>
					<td><label for="namaPenguna">Nama Pengguna :</label></td>
					<td><input type="text" name="namaUser" id="namaPenguna"></td>
				</tr>
				<tr>
					<td><label for="ktSnd" style="float: right;">Kata Sandi :</label></td>
					<td><input type="password" name="sandi" id="ktSnd"></td>
				</tr>
				<tr>
					<td><label for="spasi"></label></td>
					<td><button type="submit" name="tekan">Masuk</button></td>
				</tr>
			</table>
		</form>
	</body>
</html>