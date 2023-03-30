<?php

require "functions.php";

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/" => "controllers/home.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "404" => "views/404.view.php"
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require $routes["404"];
}
