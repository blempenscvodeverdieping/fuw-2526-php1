<?php

try {
    $stmt = $pdo->prepare(
        "DELETE FROM gastenboek
        WHERE id=:id",
    );
    $stmt->execute([
        "id" => $id,
    ]);
    $item = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij verwijderen van gegevens:" . $e->getMessage());
}
