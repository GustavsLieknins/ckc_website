<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete events</title>
    <style>
        form
        {
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        button
        {
            all: unset;
            margin-top: 5px;
            width: 200px;
            background-color: red;
            color: white;
            border: 1px solid black;
        }
        button
        {
            cursor: pointer;
        }
    </style>
</head>
<?php require "components/navbar.php" ?>
<body>
    <h1>Press on any off them to delete em</h1>
    <form action="">
        <?php foreach($events as $event) { ?>
            <button name="id" value=<?= $event["id"] ?> ><?= htmlspecialchars($event["event"]) ?></button>
        <?php }; ?>
    </form>
</body>
</html>