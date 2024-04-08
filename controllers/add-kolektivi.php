<?php

require "Database.php";
$config = require "config.php";
require "Validator.php";




if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $errors = [];
    if(!Validator::string($_POST["name"], min_len: 1, max_len: 255) || !Validator::string($_POST["description"], min_len: 1, max_len: 255))
    {
        $errors["name-empty"] = "Title or description cannot be empty";
    }

    if(empty($errors))
    {
        $query = "INSERT INTO ckc_kolektivi
        (name,description)
        VALUES
        (:name, :description);";
        $params = [":name" => $_POST["name"], ":description" => $_POST["description"]];
        $db = new Database($config);
        $kolektivi = $db->execute($query, $params)->fetchALL();
        header('Location: '. "/kolektivi");
    }else{
        $query = "SELECT * FROM ckc_events";
        $params = [];
    }    
}


require "views/add-kolektivi.view.php";