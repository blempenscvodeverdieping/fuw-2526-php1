<?php

require_once "db.php";

try {
    $stmt = $pdo->query("SELECT * FROM aandoeningen");
    $aandoeningen = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen van aandoeningen: " . $e->getMessage());
}

//print_r($aandoeningen);
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
    <p><a href="aandoening-toevoegen.php">Nieuwe aandoening toevoegen</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Handelingen</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($aandoeningen as $aandoening): ?>
            <tr>
                <td><a href="aandoening.php?id=<?= $aandoening[
                    "id"
                ] ?>"><?= $aandoening["id"] ?></a></td>
                <td><?= $aandoening["naam"] ?></td>
                <td>
                    <a href="aandoening-aanpassen.php?id=<?= $aandoening[
                        "id"
                    ] ?>">Aanpassen</a>
                    <a href="aandoening-verwijderen.php?id=<?= $aandoening[
                        "id"
                    ] ?>">Verwijderen</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
