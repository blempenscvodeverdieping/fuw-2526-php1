<?php

try {
    $stmt = $pdo->prepare(
        "INSERT INTO patienten (voornaam, achternaam, bloedgroep_id, gemeente_id, geboortedatum)
        VALUES (:voornaam, :achternaam, :bloedgroep_id, :gemeente_id, :geboortedatum)",
    );
    $stmt->execute(
        compact(
            "voornaam",
            "achternaam",
            "bloedgroep_id",
            "gemeente_id",
            "geboortedatum",
        ),
    );
} catch (PDOException $e) {
    die("Fout bij toevoegen patient: " . $e->getMessage());
}
