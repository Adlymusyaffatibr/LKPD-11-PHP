<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bill2 = [77, 99, 55, 81, 45, 90, 91, 98];
    
    $common_numbers = array_intersect($bill1, $bill2);
    $different_numbers = array_merge(array_diff($bill1, $bill2), array_diff($bill2, $bill1));

    echo"bilangan yang sama dalam kedua array adalah: ". implode(", ", $common_numbers);
    echo"<br><br>bilangan yang tidak sama dalam kedua array adalah: ". implode(", ", $different_numbers);
    ?>
</body>
</html>