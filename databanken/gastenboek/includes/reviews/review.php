<article class="bg-gray-200 rounded p-4">
    <h2 class="text-lg font-semibold">
        <?= $review["naam"] ?>
    </h2>
    <p class="italic text-sm text-gray-500">
        Verblijf in: <?= $review["hotel_naam"] ?>
    </p>
    <p class="text-sm my-4">
        <a class="transition bg-orange-500 hover:bg-orange-400 rounded px-2 text-orange-100" href="item-aanpassen.php?id=<?= $review[
            "id"
        ] ?>">aanpassen</a>
        <a class="transition bg-red-500 hover:bg-red-400 rounded px-2 text-red-100" href="item-verwijderen.php?id=<?= $review[
            "id"
        ] ?>">verwijderen</a>
    </p>
    <div class="my-4">
        <?= $review["beschrijving"] ?>
    </div>
    <p class="text-gray-500">
        <!--Score:-->
        <span class="text-yellow-400">
            <?php
            echo str_repeat("★", $review["score"]);
            echo str_repeat("☆", 5 - $review["score"]);
            ?>
        </span>
    </p>
    <p class="text-gray-400 text-sm">
        Geschreven op <?= $review["aangemaakt_op"] ?>
    </p>
</article>
