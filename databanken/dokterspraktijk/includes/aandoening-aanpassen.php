<?php

try {
    $stmt = $pdo->prepare(
        "UPDATE aandoeningen SET naam=:naam, beschrijving=:beschrijving WHERE id=:id",
    );
    $stmt->execute([
        ":naam" => $naam,
        ":beschrijving" => $beschrijving,
        ":id" => $id,
    ]);
    $melding = "Aandoening is aangepast!";
} catch (PDOException $e) {
    die("Fout bij aanpassen van aandoening: " . $e->getMessage());
}
