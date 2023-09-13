<?php

declare(strict_types=1);

require_once('./src/database/DataBase.php');
require_once('./src/router/Route.php');
require_once('./src/router/Router.php');

use Src\Router\Route;
use Src\Router\Router;
use Src\Database\DataBase;

$db = new DataBase();
$db->connectToDb('mysql:host=127.0.0.1:3306;dbname=library', 'root', 'root');

$router = new Router();

$router->addRoute(new Route('GET', '/', './public/views/home.php'));
$router->addRoute(new Route('GET', '/create', './public/views/create.php'));

try {
    require_once($router->findRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']));
} catch (Exception $e) {
    require_once('./public/views/404.php');
}
