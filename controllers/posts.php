<?php
// Include the necessary files for database and functions

require "Database.php";

// Load the configuration for the database
$config = require("config.php");

// Initialize the query to select all posts
$query = "SELECT * FROM posts";
$params = [];

// Check if an ID is set in the GET parameters
if (isset($_GET["id"]) && $_GET["id"] != "") {
    // If an ID is set, modify the query to select only the post with that ID
    $id = $_GET["id"];
    $query .= " WHERE id=:id";
    $params = [":id" => $id];
}

// Check if a category name is set in the GET parameters 
if (isset($_GET["category"]) && $_GET["category"] != "") {
    // If a category name is set, modify the query to select only the posts with that category
    // trim nodzēš lieko uzrakstīto
    $category = trim($_GET["category"]);
    $query .= " LEFT JOIN categories ON posts.category_id = categories.id WHERE categories.name = :category";
    $params = [":category" => $category];
}

// Create a new Database object with the configuration
$db = new Database($config);

// Execute the query and fetch all the results
$posts = $db
    ->execute($query, $params)
    ->fetchAll();
$title = "Posts";

require "views/posts.view.php";
