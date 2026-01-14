<?php

try {
    $stmt = $pdo->query("SELECT * FROM hotels");
    $hotels = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens:" . $e->getMessage());
}
