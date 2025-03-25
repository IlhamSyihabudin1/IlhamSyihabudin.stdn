<?php

$Fruits = ["Apel", "Nanas", "Semangka", "Melon", "Alpukat", "Anggur", "Pisang"];

echo "Daftar Nama Buah:\n";
foreach ($Fruits as $buah) {
    echo $buah . "\n";
}

// Menampilkan nama buah yang dimulai dengan huruf "A"
echo "Nama Nama Buah yang dimulai dengan huruf 'A':\n";
foreach ($Fruits as $buah) {
    if (stripos($buah, 'A') === 0) {
        echo $buah . "\n";
    }
}
?>
