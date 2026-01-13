<?php

require_once "db.php";

if (!isset($_GET["id"])) {
    die("Fout bij ophalen van gemeente: Geen ID gevonden.");
}

// Controleren of verzonden is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $id = $_GET["id"];
        $stmt = $pdo->prepare("DELETE FROM gemeentes WHERE id=:id");
        $stmt->execute([
            ":id" => $id,
        ]);

        header("location:gemeentes.php");
        exit();
    } catch (PDOException $e) {
        die("Fout bij verwijderen van gemeente: " . $e->getMessage());
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gemeente verwijderen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Gemeente verwijderen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="gemeentes.php">Terug naar overzicht</a></p>

    <form method="post">
        <p>Weet je zeker dat je deze gemeente wilt verwijderen?</p>
        <div>
            <button type="submit">Ja</button>
            <a href="gemeentes.php">Nee</a>
        </div>
    </form>

</body>
</html>
