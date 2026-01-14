<?php

try {
    $stmt = $pdo->prepare(
        "UPDATE patienten SET voornaam=:voornaam, achternaam=:achternaam, bloedgroep_id=:bloedgroep_id, gemeente_id=:gemeente_id, geboortedatum=:geboortedatum
        WHERE id=:id",
    );
    $stmt->execute(
        compact(
            "voornaam",
            "achternaam",
            "bloedgroep_id",
            "gemeente_id",
            "geboortedatum",
            "id",
        ),
    );
} catch (PDOException $e) {
    die("Fout bij aanpassen patient: " . $e->getMessage());
}
