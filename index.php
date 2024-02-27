<?php

require "functions.php";

echo "Hello" . "<br>";

$connection_string = "mysql:host=localhost;dbname=blog_Kristers_Skrastins;user=root;password=;charset=utf8mb4";
$pdo = new PDO($connection_string);


// Sagatavot SQL izpildei
$query = $pdo->prepare("SELECT * FROM posts");
// Izpildīt SQL
$query->execute();
// Beidzot dabūt rezultātus, visus pie tam!
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}
echo "</ul>";
