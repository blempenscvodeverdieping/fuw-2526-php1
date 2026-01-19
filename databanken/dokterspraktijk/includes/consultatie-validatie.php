<?php

$datum = trim($_POST["datum"]);
$patient_id = (int) trim($_POST["patient_id"]);
$aandoening_id = (int) trim($_POST["aandoening_id"]);
$notities = trim($_POST["notities"]);

if (!$datum) {
    $errors["datum"] = "Datum is verplicht.";
}

if (!$patient_id) {
    $errors["patient_id"] = "Patient is verplicht.";
}

if (!$aandoening_id) {
    $errors["aandoening_id"] = "Aandoening is verplicht.";
}
