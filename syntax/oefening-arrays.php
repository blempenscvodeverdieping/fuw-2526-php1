<?php

$leerlingen = ["jan", "piet", "klaas", "els", "sara"];
$scores = [85, 90, 78, 92, 88];

$films = [
    [
        "naam" => "Inception",
        "score" => 87,
    ],
    [
        "naam" => "The Dark Knight",
        "score" => 94,
    ],
    [
        "naam" => "Interstellar",
        "score" => 91,
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening Arrays</title>
</head>
<body>

<h1>Oefening arrays</h1>

<h2>Leerlingen en scores</h2>
<ul>
    <?php foreach ($leerlingen as $key => $leerling): ?>
        <li><?php echo $leerling; ?>: <?php echo $scores[$key]; ?>/100</li>
    <?php endforeach; ?>
</ul>

<h2>Films en scores</h2>
<ul>
    <?php foreach ($films as $film): ?>
        <li><?php echo $film["naam"]; ?>: <?php echo $film["score"]; ?>/100</li>
    <?php endforeach; ?>
</ul>

</body>
</html>
