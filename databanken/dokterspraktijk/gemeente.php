<?php

require_once "db.php";

if (!isset($_GET["id"])) {
    die("Fout bij ophalen van gemeente: Geen ID gevonden.");
}

try {
    $id = $_GET["id"];
    $stmt = $pdo->prepare("SELECT * FROM gemeentes WHERE id=:id");
    $stmt->execute([":id" => $id]);
    $gemeente = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij ophalen van gemeente: " . $e->getMessage());
}

//print_r($gemeentes);
//exit();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gemeente</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Gemeentes</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="gemeentes.php">Terug naar overzicht</a></p>

    <h3><?= $gemeente["naam"] ?></h3>
    <p>Postcode: <?= $gemeente["postcode"] ?></p>
</body>
</html>
