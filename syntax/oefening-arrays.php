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
        <!-- <li>Bert: 58/100</li> -->
        <?php foreach ($leerlingen as $index => $leerling): ?>
            <li><?php echo $leerling; ?>: <?php echo $scores[$index]; ?>/100</li>
        <?php endforeach; ?>
    </ul>

    <h2>Films en scores</h2>
    <ul>
        <!-- <li>Inception: 87/100</li> -->
        <?php foreach ($films as $film): ?>
            <li><?php echo $film["naam"]; ?>: <b class="extrabold"><?php echo $film["score"]; ?></b>/100</li>
        <?php endforeach; ?>
    </ul>

</body>

</html>