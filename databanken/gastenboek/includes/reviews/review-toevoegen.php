<?php

try {
    $stmt = $pdo->prepare(
        "INSERT INTO gastenboek (naam, beschrijving, hotel_id, score)
        VALUES (:naam, :beschrijving, :hotel_id, :score)",
    );
    $stmt->execute(compact("naam", "beschrijving", "hotel_id", "score"));
    $item = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij toevoegen van gegevens:" . $e->getMessage());
}
