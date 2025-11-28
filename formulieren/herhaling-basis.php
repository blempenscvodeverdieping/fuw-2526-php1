<?php

$naam = $email = $bericht = "";
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars(addslashes(trim($_POST["naam"])));
    $email = htmlspecialchars(addslashes(trim($_POST["email"])));
    $bericht = htmlspecialchars(addslashes(trim($_POST["bericht"])));

    if (empty($naam)) {
        $errors["naam"] = "Naam is verplicht.";
    }

    if (empty($email)) {
        $errors["email"] = "Email is verplicht.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Ongeldig email formaat.";
    }

    if (empty($bericht)) {
        $errors["bericht"] = "Bericht is verplicht.";
    }

    if (empty($errors)) {
        // Verwerking van het formulier, zoals opslaan in database of verzenden van email
        $success = true;
        // Mail versturen
        // mail($to, $subject, $message, $headers);
        // Reset velden na succesvolle verzending
        $naam = $email = $bericht = "";
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Herhaling basis</title>
</head>
<body>

    <pre>GET: <?php print_r($_GET); ?></pre>
    <pre>POST <?php print_r($_POST); ?></pre>

    <h1>Herhaling basis formulieren</h1>

    <?php if ($success): ?>
        <p style="color: green;">Bedankt voor je bericht, we nemen zo snel mogelijk contact met je op!</p>
    <?php endif; ?>

    <form method="post" novalidate>
        <div>
            <label for="naam">Naam</label>
            <input value="<?= $naam ?>" placeholder="Naam" type="text" id="naam" name="naam">
            <?php if (isset($errors["naam"])): ?>
                <span style="color: red;"><?= $errors["naam"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="email">Email</label>
            <input value="<?= $email ?>" name="email" type="email" id="email">
            <?php if (isset($errors["email"])): ?>
                <span style="color: red;"><?= $errors["email"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="bericht">Bericht</label>
            <textarea name="bericht" id="bericht"><?= $bericht ?></textarea>
            <?php if (isset($errors["bericht"])): ?>
                <span style="color: red;"><?= $errors["bericht"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <button type="submit">Verzenden</button>
        </div>
    </form>

</body>
</html>
