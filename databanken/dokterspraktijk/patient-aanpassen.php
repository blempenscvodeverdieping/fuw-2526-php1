<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient aanpassen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Patient aanpassen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="patienten.php">Terug naar overzicht</a></p>

    <form method="post">
        <div>
            <label for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam">
            <p class="error">Voornaam is verplicht</p>
        </div>
        <div>
            <label for="naam">Achternaam</label>
            <input type="text" name="naam" id="naam">
            <p class="error">Achternaam is verplicht</p>
        </div>
        <div>
            <label for="bloedgroep_id">Bloedgroep</label>
            <select name="bloedgroep_id" id="bloedgroep_id">
                <option value="1">A+</option>
            </select>
            <p class="error">Bloedgroep is verplicht</p>
        </div>
        <div>
            <label for="gemeente_id">Gemeente</label>
            <select name="gemeente_id" id="gemeente_id">
                <option value="1">3690 Bree</option>
            </select>
            <p class="error">Gemeente is verplicht</p>
        </div>
        <div>
            <label for="geboortedatum">Geboortedatum</label>
            <input type="date" name="geboortedatum" id="geboortedatum">
            <p class="error">Geboortedatum is verplicht</p>
        </div>
        <div>
            <button type="submit">Patient aanpassen</button>
        </div>
    </form>

</body>
</html>
