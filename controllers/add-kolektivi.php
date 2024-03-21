<?php

require "Database.php";
$config = require "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $query = "INSERT INTO ckc_kolektivi
    (name,description)
    VALUES
    (':name', ':description');";
    $params = [":name" => $_POST["name"], ":description" => $_POST["description"]];
    header('Location: '. "/kolektivi");
}else{
    $query = "SELECT * FROM ckc_events";
    $params = [];
}

$db = new Database($config);
$kolektivi = $db->execute($query, $params)->fetchALL();

require "views/add-kolektivi.view.php";