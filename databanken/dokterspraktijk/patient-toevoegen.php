<?php
require_once "db.php";

$voornaam = $achternaam = $bloedgroep_id = $gemeente_id = $geboortedatum = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "includes/patient-validatie.php";

    if (empty($errors)) {
        require_once "includes/patient-toevoegen.php";

        header("Location: patienten.php");
        exit();
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient toevoegen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Patient toevoegen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="patienten.php">Terug naar overzicht</a></p>

    <form method="post">
        <?php require_once "includes/patient-formulier.php"; ?>
        <div>
            <button type="submit">Patient toevoegen</button>
        </div>
    </form>

</body>
</html>
