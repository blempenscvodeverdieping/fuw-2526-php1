<?php

try {
    $id =
        $_GET["id"] ?? die("Fout bij ophalen van patient: Geen id meegegeven.");
    $stmt = $pdo->prepare(
        "SELECT patienten.*,
            bloedgroepen.type AS bloedgroep,
            gemeentes.naam AS gemeente_naam,
            gemeentes.postcode AS gemeente_postcode
        FROM patienten
        JOIN bloedgroepen ON patienten.bloedgroep_id=bloedgroepen.id
        JOIN gemeentes ON patienten.gemeente_id=gemeentes.id
        WHERE patienten.id=:id",
    );
    $stmt->execute([":id" => $id]);
    $patient = $stmt->fetch();
} catch (PDOException $e) {
    die("Fout bij ophalen van patient: " . $e->getMessage());
}

if (!$patient) {
    die("Fout bij ophalen van patient: Geen patient gevonden.");
}
