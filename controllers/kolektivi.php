<?php
require "Database.php";
$config = require "config.php";






$query = "SELECT * FROM ckc_kolektivi"; 
$params = [];
$db = new Database($config);
$kolektivi = $db->execute($query, $params)->fetchALL();

require "views/kolektivi.view.php";
//  var_dump($events);