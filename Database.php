<?php
class Database
{
    private $pdo;
    // Savienojamies ar datu bāzi tikai vienreiz
    public function __construct()
    {
        $connection_string = "mysql:host=localhost;dbname=blog_Kristers_Skrastins;user=root;password=;charset=utf8mb4";
        $this->pdo = new PDO($connection_string);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    // execute vai query
    public function execute($query_string)
    {

        // Sagatavot SQL izpildei
        $query = $this->pdo->prepare($query_string);
        // Izpildīt SQL
        $query->execute();
        // Atgriezt rezultātu!
        return $query;
    }
}
