<?php

// Gegevens ophalen
$naam = trim($_POST["naam"]);
$beschrijving = trim($_POST["beschrijving"]);

// Foutmeldingen genereren
if (empty($naam)) {
    $errors["naam"] = "Naam is verplicht";
}

if (empty($beschrijving)) {
    $errors["beschrijving"] = "Beschrijving is verplicht";
}
