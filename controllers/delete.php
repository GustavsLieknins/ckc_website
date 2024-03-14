<?php
require "Database.php";
$config = require "config.php";


if(isset($_GET["id"]))
{
    $query = "DELETE FROM ckc_events WHERE id = $_GET[id];";
    $params = [];
    $db = new Database($config);
    $events = $db->execute($query, $params)->fetchALL();
}
else
{
    $query = "SELECT * FROM ckc_events"; 
    $params = [];
}

$query = "SELECT * FROM ckc_events"; 
$params = [];
$db = new Database($config);
$events = $db->execute($query, $params)->fetchALL();

require "views/delete.view.php";