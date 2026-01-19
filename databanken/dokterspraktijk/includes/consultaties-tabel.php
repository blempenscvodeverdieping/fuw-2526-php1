<?php if (!$consultaties): ?>
<p>Geen consultaties gevonden.</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Datum</th>
            <?php if (!isset($patient_id)): ?>
                <th>Patient</th>
            <?php endif; ?>
             <?php if (!isset($aandoening_id)): ?>
             <th>Aandoening</th>
            <?php endif; ?>
            <th>Handelingen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($consultaties as $consultatie): ?>
            <tr>
                <td><a href="consultatie.php?id=<?= $consultatie[
                    "id"
                ] ?>"><?= $consultatie["id"] ?></a></td>
                <td><a href="consultatie.php?id=<?= $consultatie[
                    "id"
                ] ?>"><?= $consultatie["datum"] ?></a></td>
                <?php if (!isset($patient_id)): ?>
                    <td><?= $consultatie["patient_voornaam"] .
                        " " .
                        $consultatie["patient_achternaam"] ?></td>
                <?php endif; ?>
                <?php if (!isset($aandoening_id)): ?>
                    <td><?= $consultatie["aandoening_naam"] ?></td>
                <?php endif; ?>
                <td>
                    <a href="consultatie-aanpassen.php?id=<?= $consultatie[
                        "id"
                    ] ?>">Aanpassen</a>
                    <a href="consultatie-verwijderen.php?id=<?= $consultatie[
                        "id"
                    ] ?>">Verwijderen</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
