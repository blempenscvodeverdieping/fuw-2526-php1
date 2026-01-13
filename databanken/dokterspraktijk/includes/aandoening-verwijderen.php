<?php

try {
    $id = $_GET["id"];
    $stmt = $pdo->prepare("DELETE FROM aandoeningen WHERE id=:id");
    $stmt->execute([
        ":id" => $id,
    ]);

    header("location:aandoeningen.php");
    exit();
} catch (PDOException $e) {
    die("Fout bij verwijderen van aandoening: " . $e->getMessage());
}
