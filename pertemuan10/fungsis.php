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

	function kueri($kuery){
		global $konek;
		// Mengambil query/data dari tabel mahasiswa
					  // koneksi | perintah query
		$hasil=mysqli_query($konek,$kuery);
		if ($hasil) {
			echo "<script>";
				echo "alert(\"Berhasil Mengambil Query! | bool(true)\");";
			echo "</script>";
		} else{
			echo "<script>";
				echo "alert(\"Gagal Mengambil Query! | bool(false) | ";
				echo mysqli_error($konek);
				echo "\");";
			echo "</script>";	
		}
		$brss=[];
		while($brs=mysqli_fetch_assoc($hasil)){
			$brss[]=$brs;
		}
		return $brss;
	}

	function prnthInsert($data){
		global $konek;
		// Mengambil data dari setiap elemen didlm form.
		$nama=htmlspecialchars($data["nama"]);
		$nim=htmlspecialchars($data["nim"]);
		$surel=htmlspecialchars($data["surel"]);
		$jurusan=htmlspecialchars($data["jurusan"]);
		$gambar=htmlspecialchars($data["gambar"]);

		// Query insert data
		$tambahKueri="INSERT INTO mahasiswa VALUES
			('','$nama','$nim','$surel','$jurusan','$gambar')
		";
		mysqli_query($konek,$tambahKueri);
		return mysqli_affected_rows($konek);
	}

	function prnthDelete($ld){
		global $konek;
		mysqli_query($konek,"DELETE FROM mahasiswa WHERE id=$ld");
		return mysqli_affected_rows($konek);
	}
?>