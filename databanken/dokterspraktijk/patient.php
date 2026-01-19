<?php

require_once "db.php";

$id = $_GET["id"] ?? die("Fout bij ophalen van patient: Geen ID gevonden.");

require_once "includes/patient-ophalen.php";

$patient_id = $patient["id"];
require_once "includes/patient-consultaties-ophalen.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Patienten</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="patienten.php">Terug naar overzicht</a></p>

    <h3><?= $patient["voornaam"] ?> <?= $patient["achternaam"] ?></h3>
    <p>Bloedgroep: <?= $patient["bloedgroep"] ?></p>
    <p>Gemeente: <a href="gemeente.php?id=<?= $patient[
        "gemeente_id"
    ] ?>"><?= $patient["gemeente_postcode"] ?> <?= $patient[
     "gemeente_naam"
 ] ?></a></p>
    <p>Geboortedatum: <?= $patient["geboortedatum"] ?></p>

    <h4>Consultaties</h4>
    <?php require_once "includes/consultaties-tabel.php"; ?>
</body>
</html>
