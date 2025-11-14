<?php

$naam = "John Doe";
$array = [5, 7, 8, 6, 4, 9, 3, 1, 2, 10];

$aantal = count($array);
$som = array_sum($array);
$gemiddelde = $som / $aantal;
$max = max($array);
$min = min($array);
$string = implode(", ", $array);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?= strtoupper($naam) ?>
    </h1>
    <p><?= $string ?></p>
    <ul>
        <li>Aantal: <?= $aantal ?></li>
        <li>Som: <?= $som ?></li>
        <li>Gemiddelde: <?= $gemiddelde ?></li>
        <li>Max: <?= $max ?></li>
        <li>Min: <?= $min ?></li>
    </ul>
</body>
</html>