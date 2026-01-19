<?php

require_once "db.php";
require_once "includes/consultatie-ophalen.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultatie</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Consultaties</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="consultaties.php">Terug naar overzicht</a></p>

    <h3><?= $consultatie["patient_voornaam"] .
        " " .
        $consultatie["patient_achternaam"] ?></h3>
    <ul>
        <li>Datum: <?= $consultatie["datum"] ?></li>
        <li>Aandoening: <a href="aandoening.php?id=<?= $consultatie[
            "aandoening_id"
        ] ?>"><?= $consultatie["aandoening_naam"] ?></a></li>
    </ul>
    <?php if ($consultatie["notities"]): ?>
        <p><?= $consultatie["notities"] ?></p>
    <?php endif; ?>
    <p> <a href="patient.php?id=<?= $consultatie[
        "patient_id"
    ] ?>">Bekijk patienten geschiedenis</a></p>

</body>
</html>
