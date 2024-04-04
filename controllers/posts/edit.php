<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "UPDATE posts SET title = :title WHERE id = :id";

    $params = [
        'title' => $_POST['title'],
        'id' => $_POST['id']
    ];

    $db->execute($query, $params);

    header("Location: /");
    die();
};

$title = "Edit";

require "views/posts/edit.view.php";
