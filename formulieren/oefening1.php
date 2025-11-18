<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact formulier</title>
	<link rel="stylesheet" href="oefening1.css">
</head>
<body>

    <h1>Contacteer ons</h1>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis totam blanditiis voluptate voluptatibus repellendus eligendi itaque ex natus qui eum voluptates pariatur officia, beatae animi ullam sequi voluptas cum atque?
    </p>

    <form action="" method="post">
        <div>
            <label for="naam">Naam</label>
            <input type="text" name="naam" id="naam">
        </div>
        <div>
            <label for="email">Emailadres</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="onderwerp">Onderwerp</label>
            <select name="onderwerp" id="onderwerp">
                <option disabled selected>-- Kies een onderwerp</option>
                <option value="contact">Contact</option>
                <option value="klacht">Klacht</option>
                <option value="sollicitatie">Sollicitatie</option>
            </select>
        </div>
        <div>
            <label for="bericht">Bericht</label>
            <textarea name="bericht" id="bericht"></textarea>
        </div>
        <div>
            <label>
                <input type="checkbox" name="voorwaarden" id="voorwaarden">
                Ik accepteer de voorwaarden
            </label>
        </div>
        <div class="nieuwsbrief">
            <label>Ik wil me inschrijven voor de nieuwsbrief</label>
            <div>
                <label>
                    <input type="radio" name="nieuwsbrief" id="nieuwsbrief"> Ja, ik wil me inschrijven
                </label>
                <label>
                    <input type="radio" name="nieuwsbrief" id="nieuwsbrief"> Nee, ik wil me niet inschrijven
                </label>
            </div>
        </div>
        <div>
            <input type="submit" value="Verzenden">
        </div>

    </form>

</body>
</html>
