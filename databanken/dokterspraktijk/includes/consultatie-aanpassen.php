<?php

try {
    $stmt = $pdo->prepare("
        UPDATE consultaties
        SET datum=:datum, patient_id=:patient_id, aandoening_id=:aandoening_id, notities=:notities
        WHERE id=:id
    ");
    $stmt->execute(
        compact("datum", "aandoening_id", "patient_id", "notities", "id"),
    );
} catch (PDOException $e) {
    die("Fout bij aanpassen van gegevens: " . $e->getMessage());
}
