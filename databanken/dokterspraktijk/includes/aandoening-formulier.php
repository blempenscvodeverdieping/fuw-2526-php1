<?php if ($melding): ?>
    <div><?= $melding ?></div>
<?php endif; ?>
<div>
    <label for="naam">Naam</label>
    <input value="<?= $naam ?>" type="text" name="naam" id="naam">
    <?php if (isset($errors["naam"])): ?>
        <p class="error">Naam is verplicht</p>
    <?php endif; ?>
</div>
<div>
    <label for="beschrijving">Beschrijving</label>
    <textarea name="beschrijving" id="beschrijving"><?= $beschrijving ?></textarea>
    <?php if (isset($errors["beschrijving"])): ?>
        <p class="error">Beschrijving is verplicht</p>
    <?php endif; ?>
</div>
