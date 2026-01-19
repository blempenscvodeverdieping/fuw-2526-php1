<?php

try {
    $stmt = $pdo->prepare("DELETE FROM consultaties WHERE id=:id");
    $stmt->execute(compact("id"));
} catch (PDOException $e) {
    die("Fout bij verwijderen van gegevens: " . $e->getMessage());
}
