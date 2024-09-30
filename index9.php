<?php
    $uang = 150000; // Uang yang mau dipecah
    $pecahan = [100000, 50000, 20000, 500]; // Pecahan yang tersedia
    $hasil = []; // Tempat nyimpen hasil pecahan
    // Loop buat tiap pecahan
    foreach ($pecahan as $nilai) {
        // Hitung berapa banyak pecahan yang bisa diambil
        $hasil[$nilai] = intdiv($uang, $nilai);
        // Sisa uang setelah diambil pecahan
        $uang = $uang % $nilai;
    }
    // Ngasih jarak di tampilan
    echo "<br>";
    echo "<br>";
    echo "Lembar Rupiah"; // Judul output
    echo "<br>";
    // Loop buat nampilin hasil pecahan
    foreach ($hasil as $nilai => $lembar) {
        // Tampilkan hasil dalam format yang rapi
        echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>";
    }
 ?>