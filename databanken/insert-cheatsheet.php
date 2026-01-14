<?php

require_once "db.php";

// naam, beschrijving, hotel_id, score
$naam = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = trim($_POST["naam"]);

    if (empty($naam)) {
        $errors[] = "Naam mag niet leeg zijn.";
    }

    if (empty($errors)) {
        try {
            $stmt = $conn->prepare(
                "INSERT INTO categorieen (naam, ...) VALUES (:naam, ...)",
            );
            $stmt->execute([
                "naam" => $naam,
                // ...
            ]);
        } catch (PDOException $e) {
            die("Fout bij het toevoegen van de categorie: " . $e->getMessage());
        }

        header("Location: categorieen_overzicht.php");
        exit();
    }
}
