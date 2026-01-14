<?php

$voornaam = trim($_POST["voornaam"]);
$achternaam = trim($_POST["achternaam"]);
$bloedgroep_id = (int) $_POST["bloedgroep_id"];
$gemeente_id = (int) $_POST["gemeente_id"];
$geboortedatum = trim($_POST["geboortedatum"]);

if (empty($voornaam)) {
    $errors["voornaam"] = "Voornaam is verplicht";
}
if (empty($achternaam)) {
    $errors["achternaam"] = "Achternaam is verplicht";
}
if (empty($bloedgroep_id)) {
    $errors["bloedgroep_id"] = "Bloedgroep is verplicht";
}
if (empty($gemeente_id)) {
    $errors["gemeente_id"] = "Gemeente is verplicht";
}
if (empty($geboortedatum)) {
    $errors["geboortedatum"] = "Geboortedatum is verplicht";
}
