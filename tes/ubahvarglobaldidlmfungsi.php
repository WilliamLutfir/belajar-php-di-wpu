<?php
$angka = 10; // Variabel global
echo gettype($angka);
echo "<br>";
$angka .= "<br>";
echo gettype($angka);

function ubahAngka() {
    global $angka; // Mengakses variabel global
    $angka = 20;   // Mengubah nilainya
}

// ubahAngka();
//echo $angka; // Output: 20

?>
