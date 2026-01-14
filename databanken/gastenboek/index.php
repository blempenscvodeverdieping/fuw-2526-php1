<?php
require_once __DIR__ . "/includes/database/db.php";
require_once __DIR__ . "/includes/reviews/reviews-ophalen.php";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastenboek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-800">

<div class="max-w-md mx-auto bg-gray-100 mt-8 rounded p-4 shadow-lg">
    <h1 class="text-center text-4xl mb-8">Gastenboek</h1>

    <p class="flex justify-center mb-8">
        <a href="item-toevoegen.php" class="bg-green-500 hover:bg-green-400 transition text-green-100 rounded p-2">Nieuw item schrijven</a>
    </p>

    <div class="grid gap-4">
    <?php foreach ($reviews as $review): ?>
        <?php require __DIR__ . "/includes/reviews/review.php"; ?>
    <?php endforeach; ?>
    </div>
</div>

</body>
</html>
