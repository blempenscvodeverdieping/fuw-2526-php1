<?php
require_once "db.php";
// Initialiseren
$naam = $beschrijving = "";
$melding = null;
$errors = [];
// Controleren of verzonden is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "includes/aandoening-validatie.php";

    if (empty($errors)) {
        require_once "includes/aandoening-toevoegen.php";
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aandoening toevoegen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Aandoening toevoegen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="aandoeningen.php">Terug naar overzicht</a></p>
    <form method="post">
        <?php require_once "includes/aandoening-formulier.php"; ?>
        <div>
            <button type="submit">Aandoening toevoegen</button>
        </div>
    </form>
</body>
</html>
