<?php

require_once "db.php";

if (!isset($_GET["id"])) {
    header("location: aandoeningen.php");
    exit();
}

try {
    $id = $_GET["id"];
    $stmt = $pdo->prepare("SELECT * FROM aandoeningen WHERE id=:id");
    $stmt->execute([":id" => $id]);
    $aandoening = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij ophalen van aandoening: " . $e->getMessage());
}

//print_r($aandoening);
//exit();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aandoeningen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Aandoeningen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="aandoeningen.php">Terug naar overzicht</a></p>

    <h3><?= $aandoening["naam"] ?></h3>
    <p><?= $aandoening["beschrijving"] ?></p>
</body>
</html>
