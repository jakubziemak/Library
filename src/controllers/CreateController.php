<?php

namespace Src\Controllers;

require_once('./src/controllers/PageController.php');

use Src\Controllers\PageController;

class CreateController extends PageController
{
    public function log()
    {
        if (isset($_POST)) {
            $data = file_get_contents("php://input");
            $user = json_decode($data, true);
            $_SESSION['test'] = $user;
        }
    }

    public function addToDB()
    {
        if (!isset($_POST)) {
            throw new \Exception;
        }

        $data = file_get_contents("php://input");
        $book = json_decode($data, true);

        $data = [
            'author' => $book['author'],
            'title' => $book['title'],
            'year_of_publication' => $book['year_of_publication'],
        ];

        $sql = "INSERT INTO books (author, title, year_of_publication) VALUES (:author, :title, :year_of_publication)";
        $this->pdo->prepare($sql)->execute($data);
    }
}
