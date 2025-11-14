<?php 

// Definieer een "ingelogd" variabele.
// Definieer een "username" variabele.
// Definieer een huidig_jaar waarbij het huidige jaar altijd berekend wordt.

// Definieer een geindexeerde array met categorien: html, css, php, javascript.
// Zie het html element "categorieen" hieronder.

// Definieer een associatieve array met blogposts: id, titel, datum en content.
// Zie het html element over artikels hieronder.

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
            <span class="ml-auto px-4 py-2 bg-gray-800">Hallo, gast / Bert</span>
            <a class="hover:underline" href="#">Afmelden</a>
            <a class="hover:underline" href="#">Aanmelden</a>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto grid grid-cols-3 gap-8">
        <section class="col-span-2">
            <header class="mb-4">
                <div class="flex gap-2 items-center mb-4">
                    <h1 class="font-semibold text-2xl">
                        Artikels
                    </h1>
                    <a href="add.php" class="bg-green-500 text-green-100 px-2 rounded inline-block">+ add</a>
                </div>
                <div class="flex gap-2">
                    <b>Categoriëen: </b>
                    <!-- Overloop de array van categorieen. Toon de SPAN indien er geen categorieen zijn. -->
                    <!-- <span>Er zijn nog geen categoriëen</span> -->
                    <a class="text-blue-500 underline" href="category.php?id=1">HTML</a>
                    <a class="text-blue-500 underline" href="category.php?id=2">CSS</a>
                    <a class="text-blue-500 underline" href="category.php?id=3">PHP</a>
                    <a class="text-blue-500 underline" href="category.php?id=4">Javascript</a>
                </div>
            </header>

            <!-- Overloop de artikel array. Indien geen artikel, toon de bijhorende P -->
            <div class="grid gap-4">
                <!-- <p class="bg-gray-200 p-4 rounded">Er zijn geen artikels. Voeg eerst aan artikel toe.</p> -->
                <article class="bg-gray-100 p-4">
                    <header class="mb-2">
                        <h1 class="font-semibold text-lg"><a class="text-blue-500 underline" href="article.php?id=1">Eerste artikel</a></h1>
                        <p class="opacity-75">Gepubliceerd op <time class="font-semibold">21-11-2022</time></p>
                        <div class="flex gap-2 my-2">
                            <a class="bg-orange-500 text-orange-100 px-2 rounded inline-block" href="edit.php?id=1">edit</a>
                            <a class="bg-red-500 text-red-100 px-2 rounded inline-block" href="delete.php?id=1">delete</a>
                        </div>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde necessitatibus adipisci similique, nemo, tempora numquam doloribus atque magni error a rem molestiae excepturi, quasi recusandae aperiam saepe culpa odio.</p>
                </article>
                <article class="bg-gray-100 p-4">
                    <header class="mb-2">
                        <h1 class="font-semibold text-lg"><a class="text-blue-500 underline" href="article.php?id=1">Eerste artikel</a></h1>
                        <p class="opacity-75">Gepubliceerd op <time class="font-semibold">21-11-2022</time></p>
                        <div class="flex gap-2 my-2">
                            <a class="bg-orange-500 text-orange-100 px-2 rounded inline-block" href="edit.php?id=1">edit</a>
                            <a class="bg-red-500 text-red-100 px-2 rounded inline-block" href="delete.php?id=1">delete</a>
                        </div>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde necessitatibus adipisci similique, nemo, tempora numquam doloribus atque magni error a rem molestiae excepturi, quasi recusandae aperiam saepe culpa odio.</p>
                </article>
                <article class="bg-gray-100 p-4">
                    <header class="mb-2">
                        <h1 class="font-semibold text-lg"><a class="text-blue-500 underline" href="article.php?id=1">Eerste artikel</a></h1>
                        <p class="opacity-75">Gepubliceerd op <time class="font-semibold">21-11-2022</time></p>
                        <div class="flex gap-2 my-2">
                            <a class="bg-orange-500 text-orange-100 px-2 rounded inline-block" href="edit.php?id=1">edit</a>
                            <a class="bg-red-500 text-red-100 px-2 rounded inline-block" href="delete.php?id=1">Delete</a>
                        </div>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde necessitatibus adipisci similique, nemo, tempora numquam doloribus atque magni error a rem molestiae excepturi, quasi recusandae aperiam saepe culpa odio.</p>
                </article>
                <article class="bg-gray-100 p-4">
                    <header class="mb-2">
                        <h1 class="font-semibold text-lg"><a class="text-blue-500 underline" href="article.php?id=1">Eerste artikel</a></h1>
                        <p class="opacity-75">Gepubliceerd op <time class="font-semibold">21-11-2022</time></p>
                        <div class="flex gap-2 my-2">
                            <a class="bg-orange-500 text-orange-100 px-2 rounded inline-block" href="edit.php?id=1">edit</a>
                            <a class="bg-red-500 text-red-100 px-2 rounded inline-block" href="delete.php?id=1">delete</a>
                        </div>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde necessitatibus adipisci similique, nemo, tempora numquam doloribus atque magni error a rem molestiae excepturi, quasi recusandae aperiam saepe culpa odio.</p>
                </article>
                <footer>
                    <a class="inline-block bg-blue-500 hover:bg-blue-600 text-blue-100 px-4 py-2 rounded" href="#">Meer artikels</a>
                </footer>
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
                        <label for="score_1" class="block">
                            <input type="radio" name="score" id="score_1"> 1
                        </label>
                        <label for="score_2" class="block">
                            <input type="radio" name="score" id="score_2"> 2
                        </label>
                        <label for="score_3" class="block">
                            <input type="radio" name="score" id="score_3"> 3
                        </label>
                        <label for="score_4" class="block">
                            <input type="radio" name="score" id="score_4"> 4
                        </label>
                        <label for="score_5" class="block">
                            <input type="radio" name="score" id="score_5"> 5
                        </label>
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
        Copyright 2023 CVO De verdieping
    </footer>

</body>

</html>