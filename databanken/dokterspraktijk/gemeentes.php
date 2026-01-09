<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gemeentes</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Gemeentes</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="gemeente-toevoegen">Nieuwe gemeente toevoegen</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Postcode</th>
                <th>Handelingen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Test</td>
                <td>3660</td>
                <td>
                    <a href="gemeente-aanpassen.php?id=1">Aanpassen</a>
                    <a href="gemeente-verwijderen.php?id=1">Verwijderen</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
