<?php
// Gegevens ophalen
$naam = $_POST["naam"];
$postcode = $_POST["postcode"];

// Foutmeldingen genereren
if (empty($naam)) {
    $errors["naam"] = "Naam is verplicht";
}

if (empty($postcode)) {
    $errors["postcode"] = "Postcode is verplicht";
} elseif (strlen($postcode) > 4) {
    $errors["postcode"] = "Postcode mag maar 4 tekens zijn";
}
