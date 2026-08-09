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
?>