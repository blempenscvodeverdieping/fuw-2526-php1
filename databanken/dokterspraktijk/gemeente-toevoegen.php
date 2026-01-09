<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gemeente toevoegen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Gemeente toevoegen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="gemeentes.php">Terug naar overzicht</a></p>

    <form method="post">
        <div>
            <label for="naam">Naam</label>
            <input type="text" name="naam" id="naam">
            <p class="error">Naam is verplicht</p>
        </div>
        <div>
            <label for="postcode">Postcode</label>
            <input type="text" name="postcode" id="postcode">
            <p class="error">Postcode is verplicht</p>
        </div>
        <div>
            <button type="submit">Gemeente toevoegen</button>
        </div>
    </form>

</body>
</html>
