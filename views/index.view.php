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
        <a href=<?= "/show?id=".$event["id"] ?>><li> <?= htmlspecialchars($event["datetime"]), " / ", htmlspecialchars($event["event"]), " / ", htmlspecialchars($event["place"]) ?> </li></a>
    <?php } ?>
    </ul>
</body>
</html>