<?php
$nama1 = "Fema Flameli";
$nama2 = "Artasya Legina";

//strlen digunakan untuk menghitung panjang string
$jumlah1 = strlen($nama1);
$jumlah2 = strlen($nama2);;

if($nama1 == $nama2){
    echo "nama sama";
}else {
    echo "nama pertama : $nama1 <br>";
    echo "nama kedua : $nama2 <br>";
    $total = abs($jumlah1 - $jumlah2);
    echo $nama1 . " memiliki jumlah karakter lebih banyak dari " . $nama2 . " : selisih " . $total . " karakter";
}
?>