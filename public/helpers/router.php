<?php

require_once('./src/router/Route.php');
require_once('./src/router/Router.php');

use Src\Router\Route;
use Src\Router\Router;

$router = new Router();

$router->addRoute(new Route('GET', '/', fn () => require_once('./public/views/home.php')));
$router->addRoute(new Route('GET', '/create', fn () => require_once('./public/views/create.php')));
