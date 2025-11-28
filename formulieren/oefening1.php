<?php

$naam = $email = $onderwerp = $bericht = $nieuwsbrief = "";
$voorwaarden = false;
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars(addslashes(trim($_POST["naam"])));
    $email = htmlspecialchars(addslashes(trim($_POST["email"])));
    $onderwerp = isset($_POST["onderwerp"])
        ? htmlspecialchars(addslashes(trim($_POST["onderwerp"])))
        : "";
    $bericht = htmlspecialchars(addslashes(trim($_POST["bericht"])));
    $voorwaarden = isset($_POST["voorwaarden"]);
    $nieuwsbrief = isset($_POST["nieuwsbrief"])
        ? htmlspecialchars(addslashes(trim($_POST["nieuwsbrief"])))
        : "";

    if (empty($naam)) {
        $errors["naam"] = "Naam is verplicht.";
    }

    if (empty($email)) {
        $errors["email"] = "Email is verplicht.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Ongeldig email formaat.";
    }

    if (empty($onderwerp)) {
        $errors["onderwerp"] = "Onderwerp is verplicht.";
    }

    if (empty($bericht)) {
        $errors["bericht"] = "Bericht is verplicht.";
    }

    if (!$voorwaarden) {
        $errors["voorwaarden"] = "Je moet de voorwaarden accepteren.";
    }

    if (empty($nieuwsbrief)) {
        $errors["nieuwsbrief"] = "Je moet een keuze maken voor de nieuwsbrief.";
    }

    if (empty($errors)) {
        $success = true;
        // Verwerking van het formulier, zoals opslaan in database of verzenden van email
        // Mail versturen
        // mail($to, $subject, $message, $headers);
        // Reset velden na succesvolle verzending
        $naam = $email = $onderwerp = $bericht = $nieuwsbrief = "";
        $voorwaarden = false;
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact formulier</title>
	<link rel="stylesheet" href="oefening1.css">
</head>
<body>
<?php
// Tijdelijk: weghalen in productieomgeving
?>
<pre>POST: <?php print_r($_POST); ?></pre>
<pre>GET: <?php print_r($_GET); ?></pre>
<pre>ERRORS: <?php print_r($errors); ?></pre>

    <h1>Contacteer ons</h1>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis totam blanditiis voluptate voluptatibus repellendus eligendi itaque ex natus qui eum voluptates pariatur officia, beatae animi ullam sequi voluptas cum atque?
    </p>

    <?php if ($success): ?>
        <p class="success">Bedankt voor je bericht, we nemen zo snel mogelijk contact met je op!</p>
    <?php endif; ?>

    <form method="post" novalidate>
        <div>
            <label for="naam">Naam</label>
            <input value="<?= $naam ?>" type="text" name="naam" id="naam">
            <?php if (isset($errors["naam"])): ?>
                <span class="error"><?= $errors["naam"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="email">Emailadres</label>
            <input value="<?= $email ?>" type="email" name="email">
                <?php if (isset($errors["email"])): ?>
                    <span class="error"><?= $errors["email"] ?></span>
                <?php endif; ?>
        </div>
        <div>
            <label for="onderwerp">Onderwerp</label>
            <select name="onderwerp" id="onderwerp">
                <option
                    disabled
                    <?= $onderwerp == "" ? "selected" : "" ?>
                >-- Kies een onderwerp</option>
                <option <?= $onderwerp == "contact"
                    ? "selected"
                    : "" ?> value="contact">Contact</option>
                <option <?= $onderwerp == "klacht"
                    ? "selected"
                    : "" ?> value="klacht">Klacht</option>
                <option <?= $onderwerp == "sollicitatie"
                    ? "selected"
                    : "" ?> value="sollicitatie">Sollicitatie</option>
            </select>
            <?php if (isset($errors["onderwerp"])): ?>
                <span class="error"><?= $errors["onderwerp"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="bericht">Bericht</label>
            <textarea name="bericht" id="bericht"><?= $bericht ?></textarea>
            <?php if (isset($errors["bericht"])): ?>
                <span class="error"><?= $errors["bericht"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label>
                <input <?= $voorwaarden
                    ? "checked"
                    : "" ?> type="checkbox" name="voorwaarden" id="voorwaarden">
                Ik accepteer de voorwaarden
            </label>
            <?php if (isset($errors["voorwaarden"])): ?>
                <span class="error"><?= $errors["voorwaarden"] ?></span>
            <?php endif; ?>
        </div>
        <div class="nieuwsbrief">
            <label>Ik wil me inschrijven voor de nieuwsbrief</label>
            <div>
                <label>
                    <input
                        <?= $nieuwsbrief == "ja" ? "checked" : "" ?>
                        value="ja"
                        type="radio"
                        name="nieuwsbrief"
                    > Ja, ik wil me inschrijven
                </label>
                <label>
                    <input
                        <?= $nieuwsbrief == "nee" ? "checked" : "" ?>
                        value="nee"
                        type="radio"
                        name="nieuwsbrief"
                    > Nee, ik wil me niet inschrijven
                </label>
            </div>
            <?php if (isset($errors["nieuwsbrief"])): ?>
                <span class="error"><?= $errors["nieuwsbrief"] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <input type="submit" value="Verzenden">
        </div>

    </form>

</body>
</html>
