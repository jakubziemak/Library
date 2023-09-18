<?php

declare(strict_types=1);

namespace Src\Controllers;

use PDO;

class PageController
{
    protected string $pageTitle = 'Library - ';
    protected PDO $pdo;
    protected string $view;

    public function __construct(string $pageTitle, string $view, PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->pageTitle .= $pageTitle;
        $this->view = $view;
    }

    public function printPage()
    {
        $this->setSessionvariables();
        require_once($this->view);
    }

    protected function getPageTitle()
    {
        return $this->pageTitle;
    }

    protected function setSessionvariables()
    {
        $_SESSION['pageTitle'] = $this->getPageTitle();
    }
}
