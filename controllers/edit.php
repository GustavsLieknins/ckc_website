<?php
require "Database.php";
$config = require "config.php";
require "Validator.php";




if(isset($_GET["datetime"]) && isset($_GET["event"]) && isset($_GET["place"]))
{
    $errors = [];
    if(!Validator::string($_GET["datetime"], min_len: 1, max_len: 255) || !Validator::string($_GET["event"], min_len: 1, max_len: 255) || !Validator::string($_GET["place"], min_len: 1, max_len: 255))
    {
        $errors["any_input"] = "Cannot be empty or too long";
    }

    if(empty($errors))
    {
        $query = "UPDATE ckc_events
        SET datetime = :datetime, event = :event, place = :place
        WHERE id = :id;";
        $params = [
        ':datetime' => $_GET['datetime'], ///chats palidzeja lol
        ':event' => $_GET['event'],
        ':place' => $_GET['place'],
        ':id' => $_GET['id']
        ];
        $db = new Database($config);
        $events = $db->execute($query, $params)->fetchALL(); 
        header('Location: '. "/");
    }
    else if(isset($_GET["id"]))
    {
        $query = "SELECT * FROM ckc_events WHERE id = $_GET[id];";
        $params = [];
        $db = new Database($config);
        $events = $db->execute($query, $params)->fetchALL();
    }
    else
    {
        $query = "SELECT * FROM ckc_events"; 
        $params = [];
        $db = new Database($config);
        $events = $db->execute($query, $params)->fetchALL();
    }
}    else
{
    $query = "SELECT * FROM ckc_events WHERE id = $_GET[id];";
    $params = [];
    $db = new Database($config);
    $events = $db->execute($query, $params)->fetchALL();
}


require "views/edit.view.php";

