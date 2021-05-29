<?php

include "../vendor/autoload.php";

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guest_book",
    "table" => "ved"
];

$table = new \W1020\Table($config);

$table->upd($_POST['id'], $_POST);

header("Location: index.php");
