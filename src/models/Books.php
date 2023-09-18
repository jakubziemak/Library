<?php

declare(strict_types=1);

namespace Src\Models;

use PDO;

class Books
{
    protected PDO $pdo;
    protected array $books;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;

        $query = 'SELECT * FROM books';

        $this->books = $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBooks(): array
    {
        return $this->books;
    }
}
