<?php

// require "functions.php";

// dd($_SERVER["REQUEST_URI"]);
$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];

// dd(parse_url($_SERVER["REQUEST_URI"]));

if($url == "/")
{
    require "controllers/index.php";
}
if($url == "/kolektivi")
{
    require "controllers/kolektivi.php";
}
if($url == "/edit")
{
    require "controllers/edit.php";
}
// echo "Page not found :(";

?>