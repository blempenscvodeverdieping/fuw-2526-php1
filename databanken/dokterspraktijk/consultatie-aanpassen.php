<?php

require_once "db.php";
require_once "includes/consultatie-ophalen.php";

$datum = $consultatie["datum"];
$patient_id = $consultatie["patient_id"];
$aandoening_id = $consultatie["aandoening_id"];
$notities = $consultatie["notities"];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "includes/consultatie-validatie.php";

    if (!$errors) {
        require_once "includes/consultatie-aanpassen.php";

        header("location: consultaties.php");
        exit();
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultatie aanpassen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Consultatie aanpassen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="consultaties.php">Terug naar overzicht</a></p>

    <form method="post">
        <?php require_once "includes/consultatie-formulier.php"; ?>
        <div>
            <button type="submit">Consultatie aanpassen</button>
        </div>
    </form>

</body>
</html>
