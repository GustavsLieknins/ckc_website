<?php
require "Database.php";
$config = require "config.php";






$query = "SELECT * FROM ckc_events WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new Database($config);
$event = $db->execute($query, $params)->fetch();

require "views/show.view.php";