<?php
	if(!isset($_POST["tekan"])){echo "<script>document.location.href='index.php'</script>";}
	require 'fungsis.php';
	$ld=$_POST["tekan"];
	// Cek affected.
	if(prnthDelete($ld)>0){
		echo "<script>";
			echo "alert(\"Data Berhasil Dihapus!\");";
			echo "document.location.href=\"index.php\"";
		echo "</script>";
	} else{
		echo "<script>";
			echo "alert(\"Data Gagal Dihapus! | ";
			echo mysqli_error($konek);
			echo "\");";
			echo "document.location.href=\"index.php\"";
		echo "</script>";
	}
?>