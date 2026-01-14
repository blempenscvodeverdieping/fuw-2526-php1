<?php

// Databank connectie maken
require_once "db.php";

// Initialiseren
$naam = $postcode = "";
$melding = null;
$errors = [];

// Controleren of verzonden is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens valideren
    require_once "includes/gemeente-validatie.php";

    if (empty($errors)) {
        // INSERT query uitvoeren
        try {
            $stmt = $pdo->prepare(
                "INSERT INTO gemeentes (naam, postcode) VALUES (:naam, :postcode)",
            );
            $stmt->execute([
                ":naam" => $naam,
                ":postcode" => $postcode,
            ]);
            $melding = "Gemeente is toegevoegd!";
        } catch (PDOException $e) {
            die("Fout bij toevoegen van gemeente: " . $e->getMessage());
        }
    }
}

// Formulier terug invullen
// Foutmeldingen tonen
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gemeente toevoegen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Gemeente toevoegen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="gemeentes.php">Terug naar overzicht</a></p>

    <form method="post">
        <?php require_once "includes/gemeente-formulier.php"; ?>
        <div>
            <button type="submit">Gemeente toevoegen</button>
        </div>
    </form>

</body>
</html>
