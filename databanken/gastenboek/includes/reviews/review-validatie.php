<?php

$naam = trim(addslashes(htmlentities($_POST["naam"])));
$beschrijving = trim(addslashes(htmlentities($_POST["beschrijving"])));
$hotel_id = (int) trim(addslashes(htmlentities($_POST["hotel_id"])));
$score = (int) trim(addslashes(htmlentities($_POST["score"])));

if (empty($naam)) {
    $errors["naam"] = "Naam is verplicht.";
} elseif (strlen($naam) > 255) {
    $errors["naam"] = "Naam mag maximum 255 tekens bevatten.";
}

if (empty($beschrijving)) {
    $errors["beschrijving"] = "Beschrijving is verplicht.";
}

if (empty($hotel_id)) {
    $errors["hotel_id"] = "Hotel is verplicht.";
}

if (empty($score)) {
    $errors["score"] = "Score is verplicht.";
}
