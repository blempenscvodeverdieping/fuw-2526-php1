<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultaties</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Consultaties</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="consultatie-toevoegen.php">Nieuwe consultatie toevoegen</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Datum</th>
                <th>Patient</th>
                <th>Aandoening</th>
                <th>Handelingen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2000-01-01 18:20:30</td>
                <td>Test Tester</td>
                <td>Oorontsteking</td>
                <td>
                    <a href="consultatie-aanpassen.php?id=1">Aanpassen</a>
                    <a href="consultatie-verwijderen.php?id=1">Verwijderen</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
