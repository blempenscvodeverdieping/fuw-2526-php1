<?php
// Definieer een "ingelogd" variabele.
$ingelogd = false;
// Definieer een "username" variabele.
$username = "Bert";
// Definieer een huidig_jaar waarbij het huidige jaar altijd berekend wordt.
$huidigeJaar = date("Y");
// Definieer een geindexeerde array met categorien: html, css, php, javascript.
// Zie het html element "categorieen" hieronder.
$categorieen = ["HTML", "CSS", "PHP", "Javascript"];
// Definieer een associatieve array met blogposts: id, titel, datum en content.
// Zie het html element over artikels hieronder.
$posts = [
    [
        "id" => 1,
        "titel" => "Eerste artikel",
        "datum" => "21-11-2022",
        "content" =>
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde necessitatibus adipisci similique, nemo, tempora numquam doloribus atque magni error a rem molestiae excepturi, quasi recusandae aperiam saepe culpa odio.",
    ],
    [
        "id" => 2,
        "titel" => "Tweede artikel",
        "datum" => "22-11-2022",
        "content" =>
            "Dit is het tweede artikel. Het bevat ook wat tekst om te tonen hoe een artikel eruit ziet.",
    ],
    [
        "id" => 1,
        "titel" => "Eerste artikel",
        "datum" => "21-11-2022",
        "content" =>
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde necessitatibus adipisci similique, nemo, tempora numquam doloribus atque magni error a rem molestiae excepturi, quasi recusandae aperiam saepe culpa odio.",
    ],
    [
        "id" => 2,
        "titel" => "Tweede artikel",
        "datum" => "22-11-2022",
        "content" =>
            "Dit is het tweede artikel. Het bevat ook wat tekst om te tonen hoe een artikel eruit ziet.",
    ],
    [
        "id" => 1,
        "titel" => "Eerste artikel",
        "datum" => "21-11-2022",
        "content" =>
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde necessitatibus adipisci similique, nemo, tempora numquam doloribus atque magni error a rem molestiae excepturi, quasi recusandae aperiam saepe culpa odio.",
    ],
    [
        "id" => 2,
        "titel" => "Tweede artikel",
        "datum" => "22-11-2022",
        "content" =>
            "Dit is het tweede artikel. Het bevat ook wat tekst om te tonen hoe een artikel eruit ziet.",
    ],
    [
        "id" => 1,
        "titel" => "Eerste artikel",
        "datum" => "21-11-2022",
        "content" =>
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde necessitatibus adipisci similique, nemo, tempora numquam doloribus atque magni error a rem molestiae excepturi, quasi recusandae aperiam saepe culpa odio.",
    ],
    [
        "id" => 2,
        "titel" => "Tweede artikel",
        "datum" => "22-11-2022",
        "content" =>
            "Dit is het tweede artikel. Het bevat ook wat tekst om te tonen hoe een artikel eruit ziet.",
    ],
];
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">

    <nav class="bg-black p-4 text-white mb-8">
        <div class="max-w-4xl mx-auto flex gap-4 items-center">
            <a class="hover:underline" href="#">Home</a>
            <a class="hover:underline" href="#">Over ons</a>
            <a class="hover:underline" href="#">Contact</a>
            <!-- Toon de span en de afmelden-link af indien ingelogd. Druk de aanmelden link af indien niet ingelogd. -->
            <!-- Druk de username of "gast" af -->
            <span class="ml-auto px-4 py-2 bg-gray-800">Hallo, <?= $ingelogd
                ? $username
                : "Gast" ?></span>
            <?php if ($ingelogd): ?>
            <a class="hover:underline" href="#">Afmelden</a>
            <?php else: ?>
            <a class="hover:underline" href="#">Aanmelden</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto grid grid-cols-3 gap-8">
        <section class="col-span-2">
            <header class="mb-4">
                <div class="flex gap-2 items-center mb-4">
                    <h1 class="font-semibold text-2xl">
                        Artikels
                    </h1>
                    <?php if ($ingelogd): ?>
                        <a href="add.php" class="bg-green-500 text-green-100 px-2 rounded inline-block">+ add</a>
                    <?php endif; ?>
                </div>
                <div class="flex gap-2">
                    <b>Categoriëen: </b>
                    <!-- Overloop de array van categorieen. Toon de SPAN indien er geen categorieen zijn. -->
                    <!-- <span>Er zijn nog geen categoriëen</span> -->
                    <?php if (!$categorieen): ?>
                        <span>Er zijn nog geen categoriëen.</span>
                    <?php else: ?>
                        <?php foreach ($categorieen as $key => $categorie): ?>
                            <a class="text-blue-500 underline" href="category.php?id=<?= $key ?>">
                                <?= $categorie ?>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </header>

            <!-- Overloop de artikel array. Indien geen artikel, toon de bijhorende P -->
            <div class="grid gap-4">
                <?php if (empty($posts)): ?>
                 <p class="bg-gray-200 p-4 rounded">Er zijn geen artikels. Voeg eerst aan artikel toe.</p>
                 <?php else: ?>
                    <?php foreach ($posts as $key => $post): ?>
                        <?php if ($key > 4) {
                            break;
                        } ?>
                        <article class="bg-gray-100 p-4">
                            <header class="mb-2">
                                <h1 class="font-semibold text-lg"><a class="text-blue-500 underline" href="article.php?id=<?= $post[
                                    "id"
                                ] ?>"><?= $post["titel"] ?></a></h1>
                                <p class="opacity-75">Gepubliceerd op <time class="font-semibold"><?= $post[
                                    "datum"
                                ] ?></time></p>
                                <?php if ($ingelogd): ?>
                                    <div class="flex gap-2 my-2">
                                        <a class="bg-orange-500 text-orange-100 px-2 rounded inline-block" href="edit.php?id=<?= $post[
                                            "id"
                                        ] ?>">edit</a>
                                            <a class="bg-red-500 text-red-100 px-2 rounded inline-block" href="delete.php?id=<?= $post[
                                                "id"
                                            ] ?>">delete</a>
                                    </div>
                                <?php endif; ?>
                            </header>
                            <p><?= $post["content"] ?></p>
                        </article>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if (count($posts) > 5): ?>
                    <footer>
                        <a class="inline-block bg-blue-500 hover:bg-blue-600 text-blue-100 px-4 py-2 rounded" href="#">Meer artikels</a>
                    </footer>
                <?php endif; ?>
            </div>
        </section>
        <aside class="bg-gray-100 p-4">
            <h1 class="text-xl font-semibold">
                Contacteer ons
            </h1>
            <form action="" class="grid gap-2">
                <div>
                    <label for="naam" class="block font-semibold">Naam</label>
                    <input class="bg-gray-300 px-4 py-2 w-full block" type="text" name="naam" id="naam">
                </div>
                <div>
                    <label for="email" class="block font-semibold">E-mailadres</label>
                    <input class="bg-gray-300 px-4 py-2 w-full block" type="email" name="email" id="email">
                </div>
                <div>
                    <p class="block font-semibold">Welke score geef je ons?</p>
                    <div class="flex gap-4">
                        <!-- Gebruik de juiste lus structuur om het label 5 keren te overlopen. -->
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <label for="score_<?= $i ?>" class="block">
                                <input type="radio" name="score" id="score_<?= $i ?>"> <?= $i ?>
                            </label>
                        <?php endfor; ?>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Verzenden" class="bg-green-500 hover:bg-green-600 text-green-100 px-4 py-2 rounded inline-block">
                </div>
            </form>
        </aside>
    </div>

    <!-- Gebruik de juiste functie om het huidige jaar af te drukken -->
    <footer class="text-center text-sm my-12">
        Copyright <?= $huidigeJaar ?> CVO De verdieping
    </footer>

</body>

</html>
