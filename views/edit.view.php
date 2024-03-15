<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        form
        {
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
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
<body>
    <h1>Press on any off them to edit</h1>
    <?php if(isset($_GET["id"])) { ?>
        <h1>Current result:  <?= $events[0]["datetime"], " / ", $events[0]["event"], " / ", $events[0]["place"] ?> </h1>
        <form>
            <label>
                Date time (YYYY-DD-MM HH-MM-SS):
                <input type="text" name="datetime" value='<?= $events[0]["datetime"] ?>'>
            </label>
            <label>
                Event:
                <input type="text" name="event" value='<?= $events[0]["event"] ?>'>
            </label>
            <label>
                Place:
                <input type="text" name="place" value='<?= $events[0]["place"] ?>'>
            </label>
            <button name="id" value=<?= $_GET["id"] ?> >Make changes</button>
        </form>
    <?php }else{; ?>
    <form>
        <?php foreach($events as $event) { ?>
            <button name="id" value=<?= $event["id"] ?> ><?= $event["event"] ?></button>
        <?php }; ?>
    </form>
    <?php }; ?>
</body>
</html>