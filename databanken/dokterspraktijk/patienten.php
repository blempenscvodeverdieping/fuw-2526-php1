<?php

require_once "db.php";
require_once "includes/patienten-ophalen.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patienten</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Patienten</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="patient-toevoegen.php">Nieuwe patient toevoegen</a></p>

    <?php require_once "includes/patienten-tabel.php"; ?>
</body>
</html>
