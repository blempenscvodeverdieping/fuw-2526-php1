<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aandoeningen</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Aandoeningen</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="aandoening-toevoegen">Nieuwe aandoening toevoegen</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Handelingen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Test</td>
                <td>
                    <a href="aandoening-aanpassen.php?id=1">Aanpassen</a>
                    <a href="aandoening-verwijderen.php?id=1">Verwijderen</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
