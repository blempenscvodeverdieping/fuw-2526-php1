<?php

try {
    $stmt = $pdo->query(
        "SELECT gastenboek.*, hotels.naam AS hotel_naam
        FROM gastenboek
        JOIN hotels ON gastenboek.hotel_id=hotels.id
        ORDER BY aangemaakt_op DESC",
    );
    $reviews = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen reviews: " . $e->getMessage());
}
