<?php

require "Database.php";
$config = require "config.php";

if(isset($_GET["when"]) && isset($_GET["event"]) && isset($_GET["where"]))
{
    $query = "INSERT INTO ckc_events
    (datetime,event,place)
    VALUES
    ($_GET[when], $_GET[event], $_GET[where]);";
    $params = [];
    $db = new Database($config);
    $kolektivi = $db->execute($query, $params)->fetchALL();
}
$query = "SELECT * ckc_events";
$params = [];
$db = new Database($config);
$kolektivi = $db->execute($query, $params)->fetchALL();

require "views/edit.view.php";