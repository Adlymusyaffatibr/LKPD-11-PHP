<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rata-Rata Nilai Mahasiswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $student = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88]
        ],
        [
            'nama' => 'Boni',
            'nilai' => [86, 70, 80, 85, 81]
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81]
        ],
        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88]
        ],
    ]; 
    echo '<tr><th>Nama</th><th>Rata-Rata</th></tr>';
    
    foreach ($student as $s) {
        $nilai = implode(', ', $s['nilai']);
        $rataRata = array_sum($s['nilai']) / count($s['nilai']);
        
        echo '<tr>';
        echo '<br>';
        echo '<td>' . htmlspecialchars($s['nama']) . '</td>';
        echo '<td>' . number_format($rataRata, 2) . '</td>';
        echo '</tr>';
    }
    ?>
</body>
</html>