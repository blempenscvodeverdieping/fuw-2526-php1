<?php if (!$patienten): ?>
<p>Geen patienten gevonden.</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Bloedgroep</th>
            <th>Gemeente</th>
            <th>Geboortedatum</th>
            <th>Handelingen</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($patienten as $patient): ?>
    <tr>
        <td>
            <a href="patient.php?id=<?= $patient["id"] ?>"><?= $patient[
    "id"
] ?></a>
        </td>
        <td><a href="patient.php?id=<?= $patient["id"] ?>"><?= $patient[
    "voornaam"
] ?></a></td>
        <td><a href="patient.php?id=<?= $patient["id"] ?>"><?= $patient[
    "achternaam"
] ?></a></td>
        <td><?= $patient["bloedgroep"] ?></td>
        <td><?= $patient["gemeente_postcode"] ?> <?= $patient[
     "gemeente_naam"
 ] ?></td>
        <td><?= $patient["geboortedatum"] ?></td>
        <td>
            <a href="patient-aanpassen.php?id=<?= $patient[
                "id"
            ] ?>">Aanpassen</a>
            <a href="patient-verwijderen.php?id=<?= $patient[
                "id"
            ] ?>">Verwijderen</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
