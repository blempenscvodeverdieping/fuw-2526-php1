<?php 

$leerlingen = ["Jan", "Piet", "Klaas", "Marie", "Sofie"];
$aantalCijfers = 20;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening lussen</title>
</head>
<body>

<h1>Leerlingen</h1>
<ul>
    <?php foreach ($leerlingen as $leerling): ?>
        <li>
            <?php echo $leerling; ?>
        </li>
    <?php endforeach; ?>
</ul>

<h1>Cijfers</h1>
<ul>
    <?php for ($i = 1; $i <= $aantalCijfers; $i++): ?>
        <li>
            <?php echo $i; ?>
        </li>
    <?php endfor; ?>
</ul>
    
</body>
</html>