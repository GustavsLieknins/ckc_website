<?php

require "Database.php";
$config = require "config.php";




if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $errors = [];
    if(trim($_POST["name"]) == "" || trim($_POST["description"]) == "" )
    {
        $errors["name-empty"] = "Title cannot be empty";
    }
    if(strlen($_POST["name"]) > 255 || strlen($_POST["description"]) > 255)
    {
        $errors["name-long"] = "This is tooooo long";  
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