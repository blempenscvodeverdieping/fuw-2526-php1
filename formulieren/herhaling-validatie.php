<?php 

// 1  Initialiseer variabelen
$errors = [];
$naam = $email = $password = $password_confirmation = "";
$success = false;

// 2  Controleer of formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2a  Verzamel en ontsmet invoer
    $naam = htmlspecialchars(addslashes(trim($_POST["naam"])));
    $email = htmlspecialchars(addslashes(trim($_POST["email"])));
    $password = htmlspecialchars(addslashes(trim($_POST["password"])));
    $password_confirmation = htmlspecialchars(addslashes(trim($_POST["password_confirmation"])));
    
    // 3  Valideer invoer
    if (empty($naam)) {
        $errors["naam"] = "Naam is verplicht.";
    }

    if (empty($email)) {
        $errors["email"] = "Email is verplicht.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Ongeldig email formaat.";
    }

    if (empty($password)) {
        $errors["password"] = "Wachtwoord is verplicht.";
    } elseif (strlen($password) < 6) {
        $errors["password"] = "Wachtwoord moet minstens 6 tekens lang zijn.";
    } elseif ($password !== $password_confirmation) {
        $errors["password"] = "Wachtwoorden komen niet overeen.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/', $password)) {
        $errors["password"] = "Wachtwoord moet minstens één hoofdletter, één kleine letter, één cijfer en één speciaal teken bevatten.";
    }

    // 4  Verwerk formulier bij geldige invoer
    if (empty($errors)) {
        $success = true;
        // $bericht = "Naam: $naam\nEmail: $email\nWachtwoord: $password";
        // mail($email, $password, $bericht, $password_confirmation);
    }
}

// 5  Toon formulier met eventuele foutmeldingen
// 6  Herstel velden na succesvolle verzending


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registratie</h1>
    <form method="post">

        <?php if ($success): ?>
            <p style="color: green;">Bedankt voor je registratie!</p>
        <?php endif; ?>

        <div>
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" value="<?= $naam ?>">
            <?php if (isset($errors["naam"])): ?>
                <span style="color: red;"><?= $errors["naam"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="email">E-mailadres</label>
            <input type="text" id="email" name="email" value="<?= $email ?>">
            <?php if (isset($errors["email"])): ?>
                <span style="color: red;"><?= $errors["email"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <?php if (isset($errors["password"])): ?>
                <span style="color: red;"><?= $errors["password"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="password_confirmation">Password confirmation</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
            <?php if (isset($errors["password_confirmation"])): ?>
                <span style="color: red;"><?= $errors["password_confirmation"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <button type="submit">Verzenden</button>
        </div>
    </form>
</body>
</html>