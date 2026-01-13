<?php

try {
    $stmt = $pdo->prepare(
        "INSERT INTO aandoeningen (naam, beschrijving) VALUES (:naam, :beschrijving)",
    );
    $stmt->execute([
        ":naam" => $naam,
        ":beschrijving" => $beschrijving,
    ]);
    $melding = "Aandoening is toegevoegd!";
} catch (PDOException $e) {
    die("Fout bij toevoegen van aandoening: " . $e->getMessage());
}
