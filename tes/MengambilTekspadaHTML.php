<!DOCTYPE html>
<html>
<head>
  <title>Contoh Mengambil Teks pada HTML</title>
</head>
<body>
  <h1 style="color: red; user-select: none;" id="judul_l">Ini adalah judul</h1>
  <p id="paragraf">Ini adalah paragraf.</p>

  <?php
  	$dom = new DOMDocument();
  	$dom->loadHTMLFile('index.php');
  	// Mengambil teks dari elemen dengan id "judul"
	$judulElemen = $dom->getElementById("judul_l");
	$judul = $judulElemen->nodeValue;

	// Mengambil teks dari elemen dengan id "paragraf"
	$paragrafElemen = $dom->getElementById("paragraf");
	$paragraf = $paragrafElemen->nodeValue;

	// Menampilkan nilai variabel judul dan paragraf
	echo "Judul: " . $judul . "<br>";
	echo "Paragraf: " . $paragraf;
  ?>
</body>
</html>
