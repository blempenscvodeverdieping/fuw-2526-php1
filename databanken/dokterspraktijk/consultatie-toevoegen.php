<?php

require_once "db.php";

$datum = $patient_id = $aandoening_id = $notities = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "includes/consultatie-validatie.php";

    if (!$errors) {
        require_once "includes/consultatie-toevoegen.php";

        header("location: consultaties.php");
        exit();
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultatie toevoegen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Consultatie toevoegen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="consultaties.php">Terug naar overzicht</a></p>

    <form method="post">
        <?php require_once "includes/consultatie-formulier.php"; ?>
        <div>
            <button type="submit">Consultatie toevoegen</button>
        </div>
    </form>

</body>
</html>
