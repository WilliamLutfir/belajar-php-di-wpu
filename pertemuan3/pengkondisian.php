<html lang="id">
	<head>
		<title>Pengkondisian</title>
	</head>
	<body>
		<?php
			echo "===Pengkondisian/Percabangan=== <br>";
			echo "- if <br>";
			echo "- if/else <br>";
			echo "- if/else if <br>";
			echo "- if/else if/else <br>";
			echo "- switch <br>";
			echo "- ternary <br>";
			echo "<br>";
			$x=20;
			if($x<20){
				echo "Benar, ".$x." lebih kecil dari 20. <br>";
			} elseif ($x==20){
				echo "Benar, ".$x." sama dengan 20. <br>";
			} else{
				echo "Salah, ".$x." lebih besar dari 20. <br>";
			}

		?>
	
	</body>
</html>