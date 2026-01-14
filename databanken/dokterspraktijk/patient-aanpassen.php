<?php
require_once "db.php";

require_once "includes/patient-ophalen.php";

$voornaam = $patient["voornaam"];
$achternaam = $patient["achternaam"];
$bloedgroep_id = $patient["bloedgroep_id"];
$gemeente_id = $patient["gemeente_id"];
$geboortedatum = $patient["geboortedatum"];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "includes/patient-validatie.php";

    if (empty($errors)) {
        require_once "includes/patient-aanpassen.php";

        header("Location: patienten.php");
        exit();
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient aanpassen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Patient aanpassen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="patienten.php">Terug naar overzicht</a></p>

    <form method="post">
        <?php require_once "includes/patient-formulier.php"; ?>
        <div>
            <button type="submit">Patient aanpassen</button>
        </div>
    </form>

</body>
</html>
