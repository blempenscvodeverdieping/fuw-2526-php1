<?php

$toppings = [
    [
        "id" => 1,
        "name" => "pepperoni",
        "prijs" => 1.50
    ],
    [
        "id" => 2,
        "name" => "ham",
        "prijs" => 2.50,
    ],
    [
        "id" => 3,
        "name" => "feta",
        "prijs" => 2,
    ],
    [
        "id" => 4,
        "name" => "ananas",
        "prijs" => 1,
    ],
    [
        "id" => 5,
        "name" => "salami",
        "prijs" => 1.50,
    ],
    [
        "id" => 6,
        "name" => "olijven",
        "prijs" => 1,
    ],
    [
        "id" => 7,
        "name" => "paprika",
        "prijs" => 1,
    ],
    [
        "id" => 8,
        "name" => "champignons",
        "prijs" => 1,
    ],
    [
        "id" => 9,
        "name" => "ui",
        "prijs" => 0.50,
    ]
];

$selectedToppings = [];
$errors = [];
$prijs = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $selectedToppings = $_POST['toppings'] ?? [];

    if (empty($selectedToppings)) {
        $errors["toppings"] = 'Je moet minstens één topping kiezen.';
    }

    if (empty($errors)) {
        foreach ($toppings as $topping) {
            if (in_array($topping['id'], $selectedToppings)) {
                $prijs += $topping['prijs'];
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Formulier</title>
    <link rel="stylesheet" href="../css/formulieren.css">
</head>

<body>
    <h1>Pizza</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($errors)): ?>
        <p>Je hebt een pizza besteld met de volgende toppings:</p>
        <ul>
            <?php foreach ($toppings as $topping): ?>
                <?php if (in_array($topping['id'], $selectedToppings)): ?>
                    <li>
                        <?php echo ucfirst($topping['name']); ?> 
                        (€<?php echo number_format($topping['prijs'], 2); ?>)
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <p>Totaalprijs: €<?php echo number_format($prijs, 2); ?></p>
    <?php else: ?>
        <form method="post">
            <fieldset>
                <legend>Kies je toppings:</legend>
                <?php foreach ($toppings as $topping): ?>
                    <div>
                        <input
                            <?= in_array($topping['id'], $selectedToppings) 
                                ? 'checked' 
                                : '' 
                            ?>
                            type="checkbox"
                            id="topping-<?php echo $topping['id']; ?>"
                            name="toppings[]"
                            value="<?php echo $topping['id']; ?>">
                        <label for="topping-<?php echo $topping['id']; ?>">
                            <?php echo ucfirst($topping['name']) . " (€" . number_format($topping['prijs'], 2) . ")"; ?>
                        </label>
                    </div>
                <?php endforeach; ?>
                <?php if (isset($errors["toppings"])): ?>
                    <p class="error"><?php echo $errors["toppings"]; ?></p>
                <?php endif; ?>
            </fieldset>
            <button type="submit">Bestel Pizza</button>
        </form>
    <?php endif; ?>
</body>

</html>