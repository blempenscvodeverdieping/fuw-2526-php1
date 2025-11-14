<?php

$ingelogd = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening ingelogd</title>
</head>
<body>
    <h1>Optie 1</h1>
    <p>
    <?php
    if ($ingelogd == true) {
        echo "Welkom terug, gebruiker!";
    } else {
        echo "Log alstublieft in om verder te gaan.";
    }
    ?></p>

    <h1>Optie 2</h1>
    <?php if ($ingelogd == true): ?>
        <p>Welkom terug, gebruiker!</p>
    <?php else: ?>
        <p>Log alstublieft in om verder te gaan.</p>
    <?php endif; ?>

    <h1>Optie 3</h1>
    <?php switch ($ingelogd) {
        case true:
            echo "<p>Welkom terug, gebruiker!</p>";
            break;
        case false:
            echo "<p>Log alstublieft in om verder te gaan.</p>";
            break;
    } ?>

    <h1>Optie 4</h1>
    <p><?php echo $ingelogd ? "Welkom terug, gebruiker!" : "Log alstublieft in om verder te gaan."; ?></p>
</body>
</html>