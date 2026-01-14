<?php

// Databank connectie maken
require_once "db.php";

// Controleren of ID in url zit
if (!isset($_GET["id"])) {
    die("Fout bij ophalen van gemeente: Geen ID gevonden.");
}

// Gegevens ophalen
try {
    $id = $_GET["id"];
    $stmt = $pdo->prepare("SELECT * FROM gemeentes WHERE id=:id");
    $stmt->execute([":id" => $id]);
    $gemeente = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij ophalen van gemeente: " . $e->getMessage());
}

if (!$gemeente) {
    die("Fout bij ophalen van gemeente: Geen gemeente gevonden.");
}

// Initialiseren met die gegevens
$naam = $gemeente["naam"];
$postcode = $gemeente["postcode"];
$melding = null;
$errors = [];

// Controleren of verzonden is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valideren
    require_once "includes/gemeente-validatie.php";

    if (empty($errors)) {
        // Update query uitvoeren
        try {
            $stmt = $pdo->prepare(
                "UPDATE gemeentes SET naam=:naam, postcode=:postcode WHERE id=:id",
            );
            $stmt->execute([
                ":naam" => $naam,
                ":postcode" => $postcode,
                ":id" => $id,
            ]);
            $melding = "Gemeente is aangepast!";
        } catch (PDOException $e) {
            die("Fout bij aanpassen van gemeente: " . $e->getMessage());
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
	<title>Gemeente aanpassen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Gemeente aanpassen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="gemeentes.php">Terug naar overzicht</a></p>

    <form method="post">
        <?php require_once "includes/gemeente-formulier.php"; ?>
        <div>
            <button type="submit">Gemeente aanpassen</button>
        </div>
    </form>

</body>
</html>
