<?php

require_once "db.php";

if (!isset($_GET["id"])) {
    die("Fout bij ophalen van aandoening: Geen ID gevonden.");
}

// Controleren of verzonden is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "includes/aandoening-verwijderen.php";
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aandoening verwijderen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Aandoening verwijderen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="aandoeningen.php">Terug naar overzicht</a></p>

    <form method="post">
        <p>Weet je zeker dat je deze aandoening wilt verwijderen?</p>
        <div>
            <button type="submit">Ja</button>
            <a href="aandoeningen.php">Nee</a>
        </div>
    </form>

</body>
</html>
