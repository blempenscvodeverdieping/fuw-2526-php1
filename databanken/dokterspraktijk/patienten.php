<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patienten</title>
</head>
<body>
    <h1>Dokterspraktijk</h1>
    <h2>Patienten</h2>
    <p><a href="index.php">Terug naar hoofdpagina</a></p>
    <p><a href="patient-toevoegen.php">Nieuwe patient toevoegen</a></p>

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
            <tr>
                <td>1</td>
                <td>Test</td>
                <td>Tester</td>
                <td>O+</td>
                <td>3960 Bree</td>
                <td>2000-01-01</td>
                <td>
                    <a href="patient-aanpassen.php?id=1">Aanpassen</a>
                    <a href="patient-verwijderen.php?id=1">Verwijderen</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
