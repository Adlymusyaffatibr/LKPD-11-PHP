<?php

$data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

function usia ($umur) {
    if ($umur < 17) {
        return 'anak-anak';
    } else {
        return 'dewasa';
    }
}

$hasil = array_map ('usia', $data);

// Menghitung jumlah "dewasa"
$jumlah_dewasa = count(array_filter($hasil, function($kategori) {
    return $kategori == 'dewasa';
}));

// Menghitung jumlah "anak-anak"
$jumlah_anak = count(array_filter($hasil, function($kategori) {
    return $kategori == 'anak-anak';
}));

// Tampilkan hasilnya
foreach ($data as $index => $umur) {
    echo "Umur: $umur - Kategori: " . $hasil[$index] . "<br>";
}

echo "\nJumlah dewasa: $jumlah_dewasa <br>";
echo "Jumlah anak-anak: $jumlah_anak <br>";

?>