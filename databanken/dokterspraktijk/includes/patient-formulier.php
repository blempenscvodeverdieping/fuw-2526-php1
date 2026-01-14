<?php
require_once "bloedgroepen-ophalen.php";
require_once "gemeentes-ophalen.php";
?>
<div>
    <label for="voornaam">Voornaam</label>
    <input value="<?= $voornaam ?>" type="text" name="voornaam" id="voornaam">
    <?php if (isset($errors["voornaam"])): ?>
        <p class="error"><?php echo $errors["voornaam"]; ?></p>
    <?php endif; ?>
</div>
<div>
    <label for="achternaam">Achternaam</label>
    <input value="<?= $achternaam ?>" type="text" name="achternaam" id="achternaam">
    <?php if (isset($errors["achternaam"])): ?>
        <p class="error"><?php echo $errors["achternaam"]; ?></p>
    <?php endif; ?>
</div>
<div>
    <label for="bloedgroep_id">Bloedgroep</label>
    <select name="bloedgroep_id" id="bloedgroep_id">
        <?php foreach ($bloedgroepen as $bloedgroep): ?>
            <option
                value="<?= $bloedgroep["id"] ?>"
                <?php if ($bloedgroep["id"] == $bloedgroep_id) {
                    echo "selected";
                } ?>>
                <?= $bloedgroep["type"] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <?php if (isset($errors["bloedgroep_id"])): ?>
        <p class="error"><?php echo $errors["bloedgroep_id"]; ?></p>
    <?php endif; ?>
</div>
<div>
    <label for="gemeente_id">Gemeente</label>
    <select name="gemeente_id" id="gemeente_id">
        <?php foreach ($gemeentes as $gemeente): ?>
            <option
                value="<?= $gemeente["id"] ?>"
                <?php if ($gemeente["id"] == $gemeente_id) {
                    echo "selected";
                } ?>>
               <?= $gemeente["postcode"] ?> <?= $gemeente["naam"] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <?php if (isset($errors["gemeente_id"])): ?>
        <p class="error"><?php echo $errors["gemeente_id"]; ?></p>
    <?php endif; ?>
</div>
<div>
    <label for="geboortedatum">Geboortedatum</label>
    <input value="<?= $geboortedatum ?>" type="date" name="geboortedatum" id="geboortedatum">
    <?php if (isset($errors["geboortedatum"])): ?>
        <p class="error"><?php echo $errors["geboortedatum"]; ?></p>
    <?php endif; ?>
</div>
