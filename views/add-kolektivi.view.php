<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require "components/navbar.php" ?>
<body>
    <h1>Add kolektivi</h1>
    <form method="POST">
        <label>
            Kolektiva name:
            <input type="text" name="name">
            Kolektiva description:
            <input type="text" name="description">
        </label>
        <button>Submit</button>
        <?php if(isset($errors["name-empty"])){ ?>
        <p class="invalid-data"><?= $errors["name-empty"] ?></p>
        <?php } ?>
        <?php if(isset($errors["name-long"])){ ?>
        <p class="invalid-data"><?= $errors["name-long"] ?></p>
        <?php } ?>
    </form>
</body>
</html>