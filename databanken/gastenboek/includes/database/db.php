<?php

// Connectie gegevens
$host = "localhost";
$dbname = "gastenboek";
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
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
