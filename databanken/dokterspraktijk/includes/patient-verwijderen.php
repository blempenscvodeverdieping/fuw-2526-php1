<?php

try {
    $stmt = $pdo->prepare(
        "DELETE FROM patienten
        WHERE id=:id",
    );
    $stmt->execute(compact("id"));
} catch (PDOException $e) {
    die("Fout bij verwijderen patient: " . $e->getMessage());
}
