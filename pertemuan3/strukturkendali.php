<html lang="id">
	<head>
		<title>Struktur Kendali</title>
		<style>
			.WarnaBaris{
				background-color: silver;				
			}
		</style>
	</head>
	<body>
		<?php
			echo "===Pengulangan=== <br>";
			echo "for <br>";
			for($a=0; $a<=5; $a+=1){
				echo "Halo Dunia ".$a."<br>";
			}
			echo "<br> while <br>";
			$b=0;
			while($b<5){
				echo "Halo Dunia ".$b."<br>";
				$b+=1;
			}
			echo "<br>do while <br>";
			$c=0;
			do{
				$c+=1;
				echo "Halo Dunia ".$c."<br>";
			} while($c<5);
		?>
		<p>- Tabel Manual HTML -</p>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<td>1,1</td>
				<td>1,2</td>
				<td>1,3</td>
				<td>1,4</td>
				<td>1,5</td>
			</tr>
			<tr>
				<td>2,1</td>
				<td>2,2</td>
				<td>2,3</td>
				<td>2,4</td>
				<td>2,5</td>
			</tr>
			<tr>
				<td>3,1</td>
				<td>3,2</td>
				<td>3,3</td>
				<td>3,4</td>
				<td>3,5</td>
			</tr>
		</table>
		<hr>
		<p>- Tabel dgn pengulangan php -</p>
		<table border="1" cellpadding="10" cellspacing="10">
			<?php
				for($i=1; $i<=3; $i+=1){
					echo "<tr>";
					for($j=1; $j<=5; $j+=1){
						echo "<td>$i,$j</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
		<hr>
		<p>- Tabel dgn pengulangan php, dgn memisahkan antara tag php dan tag html -</p>
		<table border="1" cellpadding="10" cellspacing="15">
			<?php for($i=1; $i<=3; $i+=1) : ?>
				<tr>
					<?php for($j=1; $j<=5; $j+=1) : ?>
						<!-- <td><?php echo $i.",".$j; ?></td> -->
						<td><?= $i.",".$j; ?></td> <!-- shorthand utk menampilkan keluaran isi variabel -->
					<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
		<hr>
		<table border="1" cellpadding="10" cellspacing="0">
			<?php for($i=1; $i<=5; $i+=1) : ?>
				<?php if($i%2 ==1) : ?> 
					<tr class="WarnaBaris">
				<?php else : ?>
					<tr>
				<?php endif ?>
					<?php for($j=1; $j<=5; $j+=1) : ?>
						<!-- <td><?php echo $i.",".$j; ?></td> -->
						<td><?= $i.",".$j; ?></td> <!-- shorthand utk menampilkan keluaran isi variabel -->
					<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</body>
</html>