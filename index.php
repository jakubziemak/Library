<?php

declare(strict_types=1);

session_start();

require_once('./config/db_config.php');
require_once('./src/controllers/HomeController.php');
require_once('./src/controllers/PageController.php');
require_once('./src/models/Route.php');
require_once('./src/controllers/Router.php');

use Src\Controllers\HomeController;
use Src\Controllers\PageController;
use Src\Models\Route;
use Src\Controllers\Router;

$db = new PDO($dsn, $username, $password);

$homePage = new HomeController('Home', './public/views/home.php', $db);

$router = new Router();

$router->addRoute(new Route('GET', '/', [$homePage, 'printPage']));
// $router->addRoute(new Route('GET', '/create'));
// $router->addRoute(new Route('GET', '/about'));

$router->findRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
