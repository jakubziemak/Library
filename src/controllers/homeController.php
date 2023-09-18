<?php

namespace Src\Controllers;

require_once('./src/controllers/PageController.php');
require_once('./src/models/Books.php');

use Src\Controllers\PageController;

use PDO;
use Src\Models\Books;

class HomeController extends PageController
{
    protected Books $books;

    public function __construct(string $pageTitle, string $view, PDO $pdo)
    {
        parent::__construct($pageTitle, $view, $pdo);

        $this->books = new Books($this->pdo);
    }

    protected function setSessionvariables()
    {
        $_SESSION['pageTitle'] = $this->getPageTitle();
        $_SESSION['books'] = $this->books->getBooks();
    }
}
