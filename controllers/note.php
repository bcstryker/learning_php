<?php
$heading = "Note";
$main_text = "Note page";
$main = "note_main.php";

$note_id = $_GET["id"];

//$note = $db->query("SELECT * FROM notes WHERE user_id = :user_id AND id = :id", ["user_id"=> 1, "id" => $note_id])->fetch();
$note = $db->query("SELECT * FROM notes WHERE id = :id", ["id" => $note_id])->fetch();
if (! $note) {
    error404();
}
if ($note["user_id"] !== 1) {
    error403();
}
require "views/page.view.php";