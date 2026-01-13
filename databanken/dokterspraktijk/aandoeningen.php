<?php
require_once "db.php";
require_once "includes/alle-aandoeningen-ophalen.php";
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
    <p><a href="aandoening-toevoegen.php">Nieuwe aandoening toevoegen</a></p>
    <?php require_once "includes/aandoeningen-tabel.php"; ?>
</body>
</html>
