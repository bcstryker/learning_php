<?php
$heading = "My Notes";
$main_text = "";
$main = "notes_main.php";
// TODO replace user_id below with authorization
$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->fetchAll();
//dd($notes);

require "views/page.view.php";