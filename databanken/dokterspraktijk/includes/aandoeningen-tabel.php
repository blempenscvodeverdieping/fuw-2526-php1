<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Handelingen</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($aandoeningen as $aandoening): ?>
        <tr>
            <td><a href="aandoening.php?id=<?= $aandoening[
                "id"
            ] ?>"><?= $aandoening["id"] ?></a></td>
            <td><?= $aandoening["naam"] ?></td>
            <td>
                <a href="aandoening-aanpassen.php?id=<?= $aandoening[
                    "id"
                ] ?>">Aanpassen</a>
                <a href="aandoening-verwijderen.php?id=<?= $aandoening[
                    "id"
                ] ?>">Verwijderen</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
