<?php

require_once "db.php";

try {
    require_once "includes/consultaties-ophalen.php";
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens: " . $e->getMessage());
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultaties</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Consultaties</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="consultatie-toevoegen.php">Nieuwe consultatie toevoegen</a></p>

    <?php require_once "includes/consultaties-tabel.php"; ?>
</body>
</html>
