<html lang="id">
	<head>
		<title>Basis Data</title>
	</head>
	<body>
		<?php
			echo "<b>Basis Data (Database)</b> <br>";
			echo "- Data, ialah representasi <b>fakta</b> di dunia nyata. <br>"; 
			echo "- Data biasanya saling berkaitan, dan bisa dihubungkan terhadap sesuatu. <br>";
			echo "<br>";
			echo "<b>Software utk mengelola basis data (DBMS)</b>";
			echo "<ul>";
				echo "<li> Oracle </li>";
				echo "<li> MySQL </li>";
				echo "<li> SQL Server </li>";
				echo "<li> PostgreSQL </li>";
				echo "<li> MongoDB </li>";
			echo "</ul>";
			echo "- Database merupakan data didalam DBMS.";
		?>
		<p><img src="gmbr/DBMS.png" alt="DBMS.png" title="gambaran DBMS" width="200px"></p>
		<?php
			echo "Jenis DBMS : ";
			echo "<ul>";
				echo "<li> Relasional DBMS (SQL) </li>";
				echo "<li> Hirarkikal DBMS </li>";
				echo "<li> Network DBMS </li>";
				echo "<li> NoSQL DBMS (MongoDB) </li>";
			echo "</ul>";
		?>
		<p style="text-indent: 20px;"><img src="gmbr/RDBMS.png" alt="RDBMS.png" title="gambaran RDBMS" height="300px"></p>
		<?php
			echo "<em>Gambaran Relasional DBMS</em> <br>";
			echo "<br>";
			echo "<b>Menyimpan & Mengelola Data</b> <br>";
			echo "<br>";
			echo "Masalah yang terjadi jika menyimpan & mengelola data, tanpa menggunakan basis data :";
			echo "<ul>";
				echo "<li> Kapasitas </li>";
				echo "<li> Kecepatan Akses </li>";
				echo "<li> Keamanan </li>";
				echo "<li> Duplikasi </li>";
				echo "<li> Dll </li>";
			echo "</ul>";
			echo "Solusi yang didapatkan jika menyimpan & mengelola data menggunakan basis data :";
			echo "<ul>";
				echo "<li> Skalabilitas -> Jika data bertambah, sebuah sistem mampu menangani itu. </li>";
				echo "<li> Ketersediaan Data </li>";
				echo "<li> Aman </li>";
				echo "<li> Permanen </li>";
				echo "<li> Dll </li>";
			echo "</ul>";
			echo "<b>Istilah yang ada didalam database</b>";
			echo "<ul>";
				echo "<li> Field (Column) </li>";
				echo "<li> Record (Row) </li>";
				echo "<li> Key : </li>";
				echo "<ul>
						<li>Primary Key</li>
						<li>Foreign Key</li>
					  </ul>";
				echo "<li> Auto Increment </li>";
				echo "<li> Relationship </li>";
				echo "<li> Normalization </li>";
			echo "</ul>";
			echo "<b>Kunci Utama (Primary Key)</b> <br>";
			echo "- Primary key ialah sebuah data, yang dapat merepresentasikan satu baris record secara unik. <br>";
			echo "- Setiap tabel didalam sebuah basis data harus memiliki <b>Primary Key</b>. <br>";
			echo "<br>";
			echo "<b>Perintah yang ada di SQL :</b>";
			echo "<ul>";
				echo "<li><b>show databases;</b> Menampilkan basis data yang ada (yang telah dibuat).</li>";
				echo "<li><b>create database nama_database; </b> Membuat sebuah database baru.</li>";
				echo "<li><b>use nama_database;</b> Memilih basis data yang ingin digunakan.</li>";
				echo "<li><b>create table nama_tabel(struktur_dari_database);</b> Membuat sebuah tabel baru, kemudian membuat struktur dari tabelnya.</li>";
				echo "<li><b>show tables;</b> Menampilkan tabel yang ada didalam database yang sedang dipilih.</li>";
				echo "<li><b>describe nama_tabel; </b> Melihat deskripsi dari tabel yang dipilih.</li>";
				echo "<li><b>insert into nama_tabel values(nilai yang ingin dimasukkan);</b> Memasukkan record kedalam suatu tabel, kemudian mengisi nilai yang ingin dimasukkan ke dalam tabel tsb. </li>";
				echo "<li><b>select field_yg_mna from nama_tabel;</b> Memilih field yg mna dan dari tabel yg mna, yg ingin ditampilkan. </li>";
				echo "<li><b>select field_yg_mna from nama_tabel where nama_field=nilai_yg_ingin_dicari;</b> Mencari suatu nilai tertentu dari field yg telah ditentukan.</li>";
				echo "<li><b>select field_yg_mna from nama_tabel where nama_field like %nilai_yg_ingin_dicari%;</b> Mencari suatu kata kunci tertentu dari field yg telah ditentukan. (tanda % digunakan utk menentukan letak dari kata kunci tsb, diawal/diakhir dari suatu string)</li>";
				echo "<li><b>update nama_tabel set nama_field=nilai_yg_baru where field_yg_unik=nilainya;</b> Merubah nilai dari suatu record yg ada di suatu field tertentu.</li>";
				echo "<li><b>delete from nama_tabel where field_yg_unik=nilainya;</b> Menghapus suatu record yang ditandai dgn nilai uniknya pd suatu field tertentu.</li>";
				echo "<li><b>drop table nama_tabel;</b> Menghapus suatu tabel.</li>";
				echo "<li><b>drop database nama_database;</b> Menghapus suatu database.</li>";
			echo "</ul>";

		?>
		
	</body>
</html>