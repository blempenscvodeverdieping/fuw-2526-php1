<?php

$gebruikers = [
    [
        "username" => "blempens",
        "password" => "test123",
        "isAdmin" => true,
    ],
    [
        "username" => "ziggy",
        "password" => "test12345",
        "isAdmin" => false,
    ],
    [
        "username" => "natalie",
        "password" => "123test",
        "isAdmin" => false,
    ],
    [
        "username" => "dilan",
        "password" => "dilanrulz",
        "isAdmin" => false,
    ],
    [
        "username" => "mitchell",
        "password" => "mitchellrulz",
        "isAdmin" => false,
    ],
    [
        "username" => "stef",
        "password" => "Duvel123",
        "isAdmin" => true,
    ],
];

$admins = $gebruikers;
foreach ($admins as $key => $gebruiker) {
    if ($gebruiker["isAdmin"] === false) {
        unset($admins[$key]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>

<h1>Users</h1>

<p>Er zijn <?php echo count($gebruikers); ?> gebruikers.</p>

<ul>
    <?php foreach ($gebruikers as $gebruiker): ?>
        <li>
            Username: <?php echo $gebruiker["username"]; ?><br>
            Password: <?php echo $gebruiker["password"]; ?> <br>
            <?php if ($gebruiker["isAdmin"]): ?>
                Deze gebruikers <b>is admin</b>
            <?php else: ?>
                Deze gebruikers <b>is geen admin</b>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

<h2>Admins</h2>

<ul>
    <?php foreach ($admins as $gebruiker): ?>
        <li>
            Username: <?php echo $gebruiker["username"]; ?><br>
            Password: <?php echo $gebruiker["password"]; ?> <br>
            <?php if ($gebruiker["isAdmin"]): ?>
                Deze gebruikers <b>is admin</b>
            <?php else: ?>
                Deze gebruikers <b>is geen admin</b>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
