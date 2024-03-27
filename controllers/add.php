<?php

require "Database.php";
$config = require "config.php";



if(isset($_GET["when"]) && isset($_GET["event"]) && isset($_GET["where"]))
{

    $errors = [];
    if(trim($_GET["when"]) == "" || trim($_GET["event"]) == "" || trim($_GET["where"]) == "")
    {
        $errors["any_input_empty"] = "Cannot be empty";
    }
    if(strlen($_GET["event"]) > 255 || strlen($_GET["where"]) > 255)
    {
        $errors["any_input_long"] = "This is tooooo long";  
    }

    if(empty($errors))
    {
        $query = "INSERT INTO ckc_events
        (datetime,event,place)
        VALUES
        ('$_GET[when]', '$_GET[event]', '$_GET[where]');";
        $params = [];
        $db = new Database($config);
        $kolektivi = $db->execute($query, $params)->fetchALL();
        header('Location: '. "/");
    }
    else{
        
    $query = "SELECT * FROM ckc_events";
    $params = [];
    $db = new Database($config);
    $kolektivi = $db->execute($query, $params)->fetchALL();
    }
}


require "views/add.view.php";