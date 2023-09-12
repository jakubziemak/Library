<?php

declare(strict_types=1);

namespace Src\Controllers;

use Src\Database\DataBase;

class PageController
{
    private string $pageTitle;
    private DataBase $db;

    public function __construct(DataBase $db, string $pageTitle)
    {
        $this->db = $db;
        $this->pageTitle = $pageTitle;
    }

    public function getPageTitle()
    {
        return $this->pageTitle;
    }
}
