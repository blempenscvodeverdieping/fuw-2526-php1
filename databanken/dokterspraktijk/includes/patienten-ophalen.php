<?php

try {
    $stmt = $pdo->query(
        "
    SELECT patienten.*,
        bloedgroepen.type AS bloedgroep,
        gemeentes.naam AS gemeente_naam,
        gemeentes.postcode AS gemeente_postcode
    FROM patienten
    JOIN bloedgroepen ON patienten.bloedgroep_id=bloedgroepen.id
    JOIN gemeentes ON patienten.gemeente_id=gemeentes.id
    ",
    );
    $patienten = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens:" . $e->getMessage());
}
