<?php

require_once "db.php";

require_once "includes/consultatie-ophalen.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "includes/consultatie-verwijderen.php";

    header("location: consultaties.php");
    exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultatie verwijderen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Consultatie verwijderen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="consultaties.php">Terug naar overzicht</a></p>

    <form method="post">
        <p>Weet je zeker dat je deze consultatie wilt verwijderen?</p>
        <div>
            <button type="submit">Ja</button>
            <a href="consultaties.php">Nee</a>
        </div>
    </form>

</body>
</html>
