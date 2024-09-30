<?php
$data = [80, 90, 90, 100, 85, 100, 66];
$angka = 100;


//Filter array untuk mendapatkan semua elemen yang sama dengan angka yang dicari
$array = array_filter($data, function($value) use ($angka){
    return $value == $angka;
});

$jumlah_angka = count($array);

echo "Jumlah angka $angka = $jumlah_angka"

?>