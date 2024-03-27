<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require "components/navbar.php" ?>
<body>
    <h1>Add events</h1>
    <form>
        <label>
            When YYYY-DD-MM HH-MM-SS:
            <input type="text" name="when">
            Event:
            <input type="text" name="event">
            Where:
            <input type="text" name="where">
        </label>
        <button>Submit</button>
        <?php if(isset($errors["any_input_empty"])){ ?>
        <p class="invalid-data"><?= $errors["any_input_empty"] ?></p>
        <?php } ?>
        <?php if(isset($errors["any_input_long"])){ ?>
        <p class="invalid-data"><?= $errors["any_input_long"] ?></p>
        <?php } ?>
    </form>
</body>
</html>