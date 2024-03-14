<?php
require "Database.php";
$config = require "config.php";




$query = "SELECT * FROM ckc_events"; 
$params = [];
$db = new Database($config);
$events = $db->execute($query, $params)->fetchALL();

require "views/index.view.php";
//  var_dump($events);