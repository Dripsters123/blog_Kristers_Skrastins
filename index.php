<?php
// Include the necessary files for database and functions
require "functions.php";
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


echo "<form>";
echo "Categories";
echo "<select name='category' >";
echo "<option value='sport'>Sport</option>";
echo "<option value='music'>Music</option>";
echo "<option value='food'>Food</option>";
echo "</select>";
echo "<button>Submit</button>";
echo "</form>";

echo "<form>";
// ternary operator
//echo "<input name='category' value='" . (isset($_GET["category"]) ? $category : "") . "'  />";
echo "<input name='category' value='" . ($_GET["category"] ?? '') . "'  />";
echo "<button>Filter by category</button>";
echo "</form>";

// Display a form for the user to input an ID
echo "<form>";
echo "<input name='id' value='" . ($_GET["id"] ?? '') . "'/>";
echo "<button>Submit</button>";
echo "</form>";

// Display the title "Posts"
echo "<h1>Posts</h1>";

// Start an unordered list for the posts
echo "<ul>";

// Loop through each post
foreach ($posts as $post) {
    // For each post, display the title in a list item
    echo "<li>" . $post["title"] . "</li>";
}

// End the unordered list
echo "</ul>";
