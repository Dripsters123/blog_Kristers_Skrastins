<?php
echo "Hello" . "<br>";

$connection_string = "mysql:host=localhost;dbname=blog_Kristers_Skrastins;user=root;password=;charset=utf8mb4";
$pdo = new PDO($connection_string);


// Sagatavot SQL izpildei
$query = $pdo->prepare("SELECT * FROM posts");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($posts);
echo "</pre>";
