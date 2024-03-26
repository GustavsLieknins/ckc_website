<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>
<?php require "components/navbar.php" ?>
<body>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach ($events as $event) { ?>
        <li> <?= $event["datetime"], " / ", $event["event"], " / ", $event["place"] ?> </li>
    <?php } ?>
    </ul>
</body>
</html>