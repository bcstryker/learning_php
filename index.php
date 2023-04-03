<?php

// DB Connection
require "Database.php";
$config = require("config.php");
$db = new Database($config["database"]);
$posts = $db
    ->query(
        "SELECT p.title, b.last_name 
AS author 
FROM posts p 
JOIN bloggers b 
ON p.author_id = b.blogger_id;"
    )->fetchAll(PDO::FETCH_ASSOC);

require "functions.php";
require "router.php";
