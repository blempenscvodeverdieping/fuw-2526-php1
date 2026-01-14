<?php

try {
    $stmt = $pdo->prepare(
        "UPDATE gastenboek
        SET naam=:naam,
            beschrijving=:beschrijving,
            hotel_id=:hotel_id,
            score=:score
        WHERE id=:id",
    );
    $stmt->execute(compact("id", "naam", "hotel_id", "beschrijving", "score"));
    $item = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij aanpassen van gegevens:" . $e->getMessage());
}
