<?php

try {
    $stmt = $pdo->prepare("
        INSERT INTO consultaties (datum, patient_id, aandoening_id, notities)
        VALUES (:datum, :patient_id, :aandoening_id, :notities)
    ");
    $stmt->execute(compact("datum", "patient_id", "aandoening_id", "notities"));
} catch (PDOException $e) {
    die("Fout bij toevoegen van gegevens: " . $e->getMessage());
}
