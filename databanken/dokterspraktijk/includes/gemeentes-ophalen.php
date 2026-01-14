<?php

try {
    $stmt = $pdo->query("SELECT * FROM gemeentes");
    $gemeentes = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen gemeentes: " . $e->getMessage());
}
