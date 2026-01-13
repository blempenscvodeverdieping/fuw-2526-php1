<?php

if (!isset($_GET["id"])) {
    header("location: aandoeningen.php");
    exit();
}

try {
    $id = $_GET["id"];
    $stmt = $pdo->prepare("SELECT * FROM aandoeningen WHERE id=:id");
    $stmt->execute([":id" => $id]);
    $aandoening = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij ophalen van aandoening: " . $e->getMessage());
}
