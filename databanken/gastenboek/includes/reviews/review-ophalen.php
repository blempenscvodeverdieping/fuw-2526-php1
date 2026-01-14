<?php

try {
    $stmt = $pdo->prepare(
        "SELECT *
        FROM gastenboek
        WHERE id=:id",
    );
    $stmt->execute([
        "id" => $id,
    ]);
    $hotel = $stmt->fetch();
    if (!$hotel) {
        die("Geen gegevens gevonden.");
    }
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens:" . $e->getMessage());
}
