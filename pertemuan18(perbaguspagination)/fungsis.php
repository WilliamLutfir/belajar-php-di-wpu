<?php
	// koneksi ke basis data
	                    // nama host | username | password | nama basis data
	$konek=mysqli_connect("localhost","root","","phpdasardb");
	if($konek==true){}
	else{
		echo "<script>";
			echo "alert(\"Gagal Terhubung Ke MySQL! | bool(false)\");";
		echo "</script>";
		var_dump($konek);
		echo "<br>".mysqli_error($konek);
	};

	function kueri($kuery){
		global $konek;
		// Mengambil query/data dari tabel mahasiswa
					  // koneksi | perintah query
		$hasil=mysqli_query($konek,$kuery);
		if($hasil){$brss=[];
			while($brs=mysqli_fetch_assoc($hasil)){$brss[]=$brs;}
			return $brss;}
		else{echo "<script>";
				echo "alert(\"Gagal Mengambil Query! | bool(false) | ";
				echo mysqli_error($konek);
				echo "\");";
			echo "</script>";}}

	function prnthInsert($data){
		global $konek;
		// Mengambil data dari setiap elemen didlm form.
		$nama=htmlspecialchars($data["nama"]);
		$nim=htmlspecialchars($data["nim"]);
		$surel=htmlspecialchars($data["surel"]);
		$jurusan=htmlspecialchars($data["jurusan"]);
		// upload gambar
		$gambar=unggah();
		if(!$gambar){return false;}

		// Query insert data
		$tambahKueri="INSERT INTO mahasiswa VALUES
			('','$nama','$nim','$surel','$jurusan','$gambar')
		";
		mysqli_query($konek,$tambahKueri);
		return mysqli_affected_rows($konek);
	}

	function unggah(){
		$namaFile=$_FILES["gambar"]["name"];
		$ukuranFile=$_FILES["gambar"]["size"];
		$error=$_FILES["gambar"]["error"];
		$tempName=$_FILES["gambar"]["tmp_name"];
		// cek apakah tdk ada gambar yg diupload
		if($error===4){echo "<script>";
				echo "alert('Pilih Gambar Terlebih Dahulu!');";
			echo "</script>";
			return false;
		}
		// cek apakah yg diupload adalah gambar
		$ekstensiGambarValid=["jpg","jpeg","png"];
		$ekstensiGambar=strtolower(end(explode(".",$namaFile)));
		if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
			echo "<script>";
				echo "alert('Yang Anda Upload Bukan Gambar!');";
			echo "</script>";
			return false;
		}
		// cek jika ukuran file gambar terlalu besar
		if($ukuranFile>1048576){
			echo "<script>";
				echo "alert('Ukuran Gambar Tidak Boleh Lebih Besar Dari 1MB!');";
			echo "</script>";
			return false;
		}
		// lolos pengecekan, gambar siap diupload
		// generate nama gambar baru
		$namaFileBaru=uniqid();
		$namaFileBaru.=".";
		$namaFileBaru.=$ekstensiGambar;
		move_uploaded_file($tempName,"gmbr/".$namaFileBaru);
		return $namaFileBaru;
	}

	function prnthDelete($ld){
		global $konek;
		mysqli_query($konek,"DELETE FROM mahasiswa WHERE id=$ld");
		return mysqli_affected_rows($konek);
	}

	function prnthUpdate($data){
		global $konek;
		// Mengambil data dari setiap elemen didlm form.
		$id=htmlspecialchars($data["id"]);
		$nama=htmlspecialchars($data["nama"]);
		$nim=htmlspecialchars($data["nim"]);
		$surel=htmlspecialchars($data["surel"]);
		$jurusan=htmlspecialchars($data["jurusan"]);
		$gambarLama=htmlspecialchars($data["gambarLama"]);
		
		// cek apakah user pilih gambar baru atau tdk
		                             // gambar tdk ada yg dipilih
		if($_FILES["gambar"]["error"]===4){$gambar=$gambarLama;}
		else{$gambar=unggah();}

		// Query insert data
		$ubahKueri="UPDATE mahasiswa SET
			nama='$nama',nim='$nim',surel='$surel',jurusan='$jurusan',gambar='$gambar' WHERE id=$id
		";
		mysqli_query($konek,$ubahKueri);
		return mysqli_affected_rows($konek);
	}

	function cari($katakunci){
		$kueri="SELECT * FROM mahasiswa WHERE
			nama LIKE '%$katakunci%' OR
			nim LIKE '%$katakunci%' OR
			surel LIKE '%$katakunci%' OR
			jurusan LIKE '%$katakunci%' "."ORDER BY nama ASC";
		return /*kueri(*/$kueri/*)*/;
	}

	function registrasi($data){
		global $konek;        // fungsi utk membersihkan karakter back slash
		$namapengguna=strtolower(stripcslashes($data["namapengguna"]));
		        // fungsi utk agar string dapat mengandung tanda kutip
		$katasandi=mysqli_real_escape_string($konek,$data["katasandi"]);
		$katasandi2=mysqli_real_escape_string($konek,$data["katasandi2"]);

		// cek nama pengguna sudah ada atau belum
		$hasil=mysqli_query($konek,"SELECT namapengguna FROM pengguna WHERE namapengguna='$namapengguna'");
		if(mysqli_fetch_assoc($hasil)){echo "<script>alert('Nama Pengguna Yang Dipilih Sudah Terdaftar!')</script>";
			return false;}

		// cek konfirmasi kata sandi
		if($katasandi!==$katasandi2){echo "<script>alert('Konfirmasi Kata Sandi Tidak Sesuai!')</script>";
			return false;}

		// enkripsi kata sandi (jgn pakai algoritma hashing MD5 lagi! karena sudah rentan!)
		$katasandi=password_hash($katasandi, PASSWORD_DEFAULT);
		
		// tambahkan pengguna baru ke database
		mysqli_query($konek,"INSERT INTO pengguna VALUES('','$namapengguna','$katasandi')");
		return mysqli_affected_rows($konek);
	}
?>