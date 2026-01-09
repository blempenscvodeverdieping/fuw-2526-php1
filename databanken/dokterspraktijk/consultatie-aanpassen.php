<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultatie aanpassen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Consultatie aanpassen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="consultaties.php">Terug naar overzicht</a></p>

    <form method="post">
        <div>
            <label for="datum">Datum</label>
            <input type="datetime" name="datum" id="datum">
            <p class="error">Datum is verplicht</p>
        </div>
        <div>
            <label for="patient_id">Patient</label>
            <select name="patient_id" id="patient_id">
                <option value="1">Bert Lempens (1985-11-21)</option>
            </select>
            <p class="error">Patient is verplicht</p>
        </div>
        <div>
            <label for="aandoening_id">Aandoening</label>
            <select name="aandoening_id" id="aandoening_id">
                <option value="1">Ooronsteking</option>
            </select>
            <p class="error">Aandoening is verplicht</p>
        </div>
        <div>
            <label for="notities">Notities</label>
            <textarea name="notities" id="notities"></textarea>
        </div>
        <div>
            <button type="submit">Consultatie aanpassen</button>
        </div>
    </form>

</body>
</html>
