<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aandoening aanpassen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Aandoening aanpassen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="aandoeningen.php">Terug naar overzicht</a></p>

    <form method="post">
        <div>
            <label for="naam">Naam</label>
            <input type="text" name="naam" id="naam">
            <p class="error">Naam is verplicht</p>
        </div>
        <div>
            <label for="beschrijving">Beschrijving</label>
            <textarea name="beschrijving" id="beschrijving"></textarea>
            <p class="error">Beschrijving is verplicht</p>
        </div>
        <div>
            <button type="submit">Aandoening aanpassen</button>
        </div>
    </form>

</body>
</html>
