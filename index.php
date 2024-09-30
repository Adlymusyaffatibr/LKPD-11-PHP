<?php
function cekAngkaDalamString($string) {
    preg_match_all('/\d+/', $string, $matches);

    if (!empty($matches[0])) {
        $angkaDitemukan = implode(', ', $matches[0]);
        echo "Teks mengandung angka: $angkaDitemukan";
    } else {
        echo "Teks tidak mengandung angka";
    }
}

$string1 = "Hello World!";
$string2 = "Hello 123 World!";
$string3 = "Hello 2045 World";

cekAngkaDalamString($string1);
echo "<br>";
cekAngkaDalamString($string2);
echo "<br>";
cekAngkaDalamString($string3);
?>