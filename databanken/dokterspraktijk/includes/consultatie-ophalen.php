<?php

$id = $_GET["id"] ?? die("Geen id gevonden");

try {
    $stmt = $pdo->prepare("
        SELECT consultaties.*, aandoeningen.naam AS aandoening_naam, patienten.voornaam AS patient_voornaam, patienten.achternaam AS patient_achternaam
        FROM consultaties
        JOIN aandoeningen ON consultaties.aandoening_id=aandoeningen.id
        JOIN patienten ON consultaties.patient_id=patienten.id
        WHERE consultaties.id=:id
    ");
    $stmt->execute(compact("id"));
    $consultatie = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij ophalen gegevens: " . $e->getMessage());
}
