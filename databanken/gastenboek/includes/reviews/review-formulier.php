<div>
    <label for="naam" class="text-gray-500 font-semibold">Wat is je naam?</label>
    <div>
        <input value="<?= $naam ?>" placeholder="..." id="naam" type="text" name="naam"  class="block bg-gray-200 p-2 w-full border border-neutral-400">
    </div>
    <?php if (isset($errors["naam"])): ?>
        <span class="text-red-500 text-sm"><?= $errors["naam"] ?></span>
    <?php endif; ?>
</div>
<div>
    <?php require_once __DIR__ . "/../hotels/hotels-ophalen.php"; ?>
    <label for="hotel" class="text-gray-500 font-semibold">Waar verbleef je?</label>
    <div>
        <select name="hotel_id" id="hotel" class="block w-full p-2 border border-neutral-400">
            <?php foreach ($hotels as $hotel): ?>
            <option
                <?= $hotel_id == $hotel["id"] ? "selected" : "" ?>
                value="<?= $hotel["id"] ?>">
                    <?= $hotel["naam"] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php if (isset($errors["hotel_id"])): ?>
        <span class="text-red-500 text-sm"><?= $errors["hotel_id"] ?></span>
    <?php endif; ?>
</div>
<div>
    <label for="beschrijving" class="text-gray-500 font-semibold">Wat was je ervaring?</label>
    <div>
        <textarea placeholder="..." name="beschrijving" id="beschrijving" class="block bg-gray-200 p-2 w-full border border-neutral-400"><?= $beschrijving ?></textarea>
    </div>
    <?php if (isset($errors["beschrijving"])): ?>
        <span class="text-red-500 text-sm"><?= $errors["beschrijving"] ?></span>
    <?php endif; ?>
</div>
<div>
    <label for="score" class="text-gray-500 font-semibold">Welke score geef je?</label>
    <div>
        <select name="score" id="score" class="block w-full p-2 border border-neutral-400">
            <?php for ($i = 1; $i < 6; $i++): ?>
                <option
                    <?= $score == $i ? "selected" : "" ?>
                    value="<?= $i ?>">
                        <?= str_repeat("★", $i) ?>
                </option>
            <?php endfor; ?>
        </select>
    </div>
    <?php if (isset($errors["score"])): ?>
        <span class="text-red-500 text-sm"><?= $errors["score"] ?></span>
    <?php endif; ?>
</div>
