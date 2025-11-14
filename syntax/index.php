<?php 

$currentYear = date("Y");
$pageTitle = "Mijn eerste php pagina"; // string
$age = 40; // integer
$price = 25.85; // float
$quantity = "6"; // string die een getal voorstelt
$isIngelogd = true; // boolean
$isAdmin = false; // boolean
$total = $price * $quantity; // float

// STRINGS
$voornaam = "Bert";
$achternaam = 'Lempens';
$eersteDrieLetters = substr($achternaam, 0, 3); // lem

$volledigeNaam = "$voornaam $achternaam";
$volledigeNaam = $voornaam . ' ' . $achternaam;
//$volledigeNaam = str_replace('Bert','Ziggy', $volledigeNaam);
$totaalDisplay = "Het totaal is $$total.";
$totaalDisplay = 'Het totaal is $' . $total . '.';
$naamLengte = strlen($volledigeNaam);

// INTEGERS EN FLOATS
$age = 40; // integer
$price = 25.85; // float
// * / - + %
$quantity = 1;
$quantity++;
$quantity--;

// Booleans
$isIngelogd = 1; // boolean
$isAdmin = true; // boolean
$isDuur = $price > 50; // boolean
$isLeerkracht = $volledigeNaam === "Bert Lempens"; // boolean
$isStudent = $volledigeNaam !== "Bert Lempens"; // boolean
// > < >= <= == === != !==

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo strtoupper($pageTitle) ?></title>
    <style>
        .container {
            width: 80%;
            margin: auto;
            background: lightgray;
            padding: 20px;
        }

        .info {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $pageTitle ?></h1>
        <p>Gepubliceerd door <?php echo $volledigeNaam ?></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolores, aspernatur, corporis dicta doloribus dignissimos rerum molestiae atque culpa odit repellat? Nostrum sed rem id aliquam autem tenetur nam hic?</p>
        
        <?php if($isIngelogd): ?>
            <p class="info">Ik ben <?php echo $age ?> jaar oud. Ik bestel <?php echo $quantity ?> items aan $<?php echo $price ?> en betaal $<?php echo $total ?> in totaal.</p>
            <?php if($isAdmin): ?>
                <p><?php echo $totaalDisplay ?></p>
            <?php endif ?>
        <?php endif; ?>
        <footer>Copyright &copy; <?php echo $currentYear ?></footer>

        <p class="info">Ingelogd: <?php echo $isIngelogd ? 'Ja' : 'Nee'; ?></p>
    </div>
</body>
</html>