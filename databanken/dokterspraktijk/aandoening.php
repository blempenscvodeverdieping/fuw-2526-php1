<?php
require_once "db.php";
require_once "includes/aandoening-ophalen.php";

$aandoening_id = $aandoening["id"];
require_once "includes/aandoening-consultaties-ophalen.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aandoeningen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Aandoeningen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="aandoeningen.php">Terug naar overzicht</a></p>

    <h3><?= $aandoening["naam"] ?></h3>
    <p><?= $aandoening["beschrijving"] ?></p>

    <h4>Consultaties</h4>
    <?php require_once "includes/consultaties-tabel.php"; ?>
</body>
</html>
