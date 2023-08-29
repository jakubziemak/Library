<?php

declare(strict_types=1);

require_once('./public/helpers/router.php');

var_dump($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

try {
    $router->findRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (Exception $e) {
    echo '<pre>';
    echo $e->getMessage();
    echo '</pre>';
    require_once('./public/views/404.php');
}
