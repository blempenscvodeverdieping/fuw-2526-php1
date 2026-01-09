<?php

require_once "db.php";

try {
    $stmt = $pdo->query("SELECT * FROM gemeentes");
    $gemeentes = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen van gemeentes: " . $e->getMessage());
}

//print_r($gemeentes);
//exit();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gemeentes</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Gemeentes</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="gemeente-toevoegen.php">Nieuwe gemeente toevoegen</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Postcode</th>
                <th>Handelingen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gemeentes as $gemeente): ?>
                <tr>
                    <td><a href="gemeente.php?id=<?= $gemeente[
                        "id"
                    ] ?>"><?= $gemeente["id"] ?></a></td>
                    <td><?= $gemeente["naam"] ?></td>
                    <td><?= $gemeente["postcode"] ?></td>
                    <td>
                        <a href="gemeente-aanpassen.php?id=<?= $gemeente[
                            "id"
                        ] ?>">Aanpassen</a>
                        <a href="gemeente-verwijderen.php?id=<?= $gemeente[
                            "id"
                        ] ?>">Verwijderen</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
