<?php

// -----------------
// Databank connectie maken

// Connectie gegevens
$host = "localhost";
$dbname = "...";
$dbusername = "root";
$dbpassword = "";
// Connectie string
$dsn = "mysql:host=$host;dbname=$dbname";
// Connectie opties
$dboptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
// Connectie maken
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword, $dboptions);
} catch (PDOException $e) {
    die("Geen connectie met de databank $dbname :" . $e->getMessage());
}
// -----------------

// -----------------
// Validatie
$naam = "";
$melding = null;
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = trim(addslashes(htmlentities($_POST["item"])));
    // ...

    if (empty($item)) {
        $errors["item"] = "Item is verplicht.";
    }
    // elseif (...) {
    //     $errors["item"] = "Item is verplicht.";
    // }

    // ...

    if (empty($errors)) {
        // ...
    }
}
// -----------------

// -----------------
// TRY CATCH
try {
    // ...
} catch (PDOException $e) {
    die("Fout bij ..." . $e->getMessage());
}
// -----------------

// -----------------
// Fetch all query
try {
    $stmt = $pdo->query("");
    $items = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens:" . $e->getMessage());
}
// -----------------

// -----------------
// Fetch query
try {
    $stmt = $pdo->query("");
    $item = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens:" . $e->getMessage());
}
// -----------------

// -----------------
// FetchAll Prepared
try {
    $stmt = $pdo->prepare("");
    $stmt->execute([]);
    $items = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens:" . $e->getMessage());
}
// -----------------

// -----------------
// Fetch prepared
try {
    $stmt = $pdo->prepare("");
    $stmt->execute([]);
    $item = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens:" . $e->getMessage());
}
// -----------------

// -----------------
// Fetch op id
try {
    $id = $_GET["id"] ?? die("Geen ID gevonden.");
    $stmt = $pdo->prepare("SELECT * FROM ... WHERE id=:id");
    $stmt->execute([
        "id" => $id,
    ]);
    $item = $stmt->fetch();
    if (!$item) {
        die("Geen gegevens gevonden.");
    }
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens:" . $e->getMessage());
}
// -----------------

// -----------------
// INSERT
try {
    $stmt = $pdo->prepare("INSERT INTO ... (...) VALUES (...)");
    $stmt->execute([]);
    $item = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij toevoegen van gegevens:" . $e->getMessage());
}
// -----------------

// -----------------
// UPDATE
try {
    $stmt = $pdo->prepare("UPDATE ... SET ...=... WHERE id=:id");
    $stmt->execute([
        "id" => $id,
    ]);
    $item = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij aanpassen van gegevens:" . $e->getMessage());
}
// -----------------

// -----------------
// DELETE
try {
    $stmt = $pdo->prepare("DELETE FROM ... WHERE id=:id");
    $stmt->execute([
        "id" => $id,
    ]);
    $item = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij verwijderen van gegevens:" . $e->getMessage());
}
// -----------------
