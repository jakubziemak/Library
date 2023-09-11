<?php

declare(strict_types=1);

namespace Src\Database;

use PDO;

class DataBase
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
        $statement = "SELECT * FROM $tableName";

        $query = $this->db->prepare($statement);

        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<pre>';
            print_r($row);
            echo '</pre>';
        }
    }

    public function insertToTable(string $tableName, string $author, string $title, int $yearOfPublication)
    {
        $statement = "INSERT INTO $tableName(`author`, `title`, `year_of_publication`) VALUES ('$author', '$title', '$yearOfPublication')";

        try {
            $this->db->prepare($statement)->execute();
        } catch (\PDOException $e) {
            echo $e;
        }
    }
}
