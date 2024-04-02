<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing</title>
</head>
<?php require "components/navbar.php" ?>
<body>
    <h1><?= htmlspecialchars($event["datetime"]), " / ", htmlspecialchars($event["event"]), " / ", htmlspecialchars($event["place"]) ?> </h1>
</body>
</html>