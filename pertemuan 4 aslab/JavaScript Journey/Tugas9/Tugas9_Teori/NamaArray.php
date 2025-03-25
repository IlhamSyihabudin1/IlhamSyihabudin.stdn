<?php

$mahasiswa = ["Adi", "Ayu", "Brandon", "Dian", "Eriz", "Ilham", "puja"];

echo "Daftar Nama Mahasiswa:\n";
foreach ($mahasiswa as $nama) {
    echo $nama . "\n";
}

// Menampilkan nama yang dimulai dengan huruf "A"
echo "Nama mahasiswa yang dimulai dengan huruf 'A':\n";
foreach ($mahasiswa as $nama) {
    if (stripos($nama, 'A') === 0) {
        echo $nama . "\n";
    }
}
?>
