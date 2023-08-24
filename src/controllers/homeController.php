<?php

declare(strict_types=1);

namespace Src\Controllers;

use PDO;

class HomeController
{
    private PDO $db;

    public function connectToDb(string $dsn, string $username, string $password)
    {
        try {
            $this->db = new PDO($dsn, $username, $password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getFullTable(string $tableName)
    {
        $query = "SELECT * FROM $tableName";

        foreach ($this->db->query($query) as $book) {
            echo "<pre>";
            print_r($book);
            echo "/<pre>";
        }
    }
}
