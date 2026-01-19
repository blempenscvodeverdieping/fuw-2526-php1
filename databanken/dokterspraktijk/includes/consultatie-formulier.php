<?php try {
    $stmt = $pdo->query("SELECT * FROM patienten");
    $patienten = $stmt->fetchAll();

    $stmt = $pdo->query("SELECT * FROM aandoeningen");
    $aandoeningen = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Fout bij ophalen van gegevens: " . $e->getMessage());
} ?>
<div>
    <label for="datum">Datum</label>
    <input value="<?= $datum ?>" type="datetime" name="datum" id="datum">
    <?php if (isset($errors["datum"])): ?>
        <p class="error"><?= $errors["datum"] ?></p>
    <?php endif; ?>
</div>
<div>
    <label for="patient_id">Patient</label>
    <select name="patient_id" id="patient_id">
        <?php if (!$patienten): ?>
            <option disabled selected>Geen patienten</option>
        <?php endif; ?>
        <?php foreach ($patienten as $patient): ?>
            <option
                <?= $patient_id == $patient["id"] ? "selected" : "" ?>
                value="<?= $patient["id"] ?>"
            >
                <?= $patient["voornaam"] ?>
                <?= $patient["achternaam"] ?>
                (<?= $patient["geboortedatum"] ?>)
            </option>
        <?php endforeach; ?>
    </select>
    <?php if (isset($errors["patient_id"])): ?>
        <p class="error"><?= $errors["patient_id"] ?></p>
    <?php endif; ?>
</div>
<div>
    <label for="aandoening_id">Aandoening</label>
    <select name="aandoening_id" id="aandoening_id">
        <?php if (!$aandoeningen): ?>
            <option disabled selected>Geen aandoeningen</option>
        <?php endif; ?>
        <?php foreach ($aandoeningen as $aandoening): ?>
            <option
                <?= $aandoening_id == $aandoening["id"] ? "selected" : "" ?>
                value="<?= $aandoening["id"] ?>"
            >
                <?= $aandoening["naam"] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <?php if (isset($errors["aandoening_id"])): ?>
        <p class="error"><?= $errors["aandoening_id"] ?></p>
    <?php endif; ?>
</div>
<div>
    <label for="notities">Notities</label>
    <textarea name="notities" id="notities"><?= $notities ?></textarea>
    <?php if (isset($errors["notities"])): ?>
        <p class="error"><?= $errors["notities"] ?></p>
    <?php endif; ?>
</div>
