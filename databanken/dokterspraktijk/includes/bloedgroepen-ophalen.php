<?php

try {
    $stmt = $pdo->query("SELECT * FROM bloedgroepen");
    $bloedgroepen = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen bloedgroepen: " . $e->getMessage());
}
