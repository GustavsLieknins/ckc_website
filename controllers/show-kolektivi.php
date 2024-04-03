<?php
require "Database.php";
$config = require "config.php";






$query = "SELECT * FROM ckc_kolektivi WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new Database($config);
$kolektivs = $db->execute($query, $params)->fetch();

require "views/show-kolektivi.view.php";