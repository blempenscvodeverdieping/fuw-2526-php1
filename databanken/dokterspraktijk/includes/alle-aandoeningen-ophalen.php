<?php

try {
    $stmt = $pdo->query("SELECT * FROM aandoeningen");
    $aandoeningen = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen van aandoeningen: " . $e->getMessage());
}
