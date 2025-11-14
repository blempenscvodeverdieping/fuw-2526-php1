<?php

$users = ["Alice", "Bob", "Charlie"]; // 0 1 2
$scores = [85, 92, 78];

$scoreBob = $scores[1]; // neem de key van bob uit de scores array

?>

<ul>
    <?php foreach($users as $key => $value): ?>
    <li>
        User: <?php echo $value; ?> - Score: <?php echo $scores[$key]; ?>
    </li>
    <?php endforeach; ?>
</ul>