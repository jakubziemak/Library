<?php

declare(strict_types=1);

namespace Src\Router;

use Exception;

class Router
{
    private $routes = [];

    public function addRoute(Route $route)
    {
        array_push($this->routes, $route);
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function findRoute(string $method, string $path)
    {
        $filter = array_filter($this->routes, fn ($route) => $this->selectRoute($route, $method, $path));
        $selectedRoute = array_shift($filter);

        if (!$selectedRoute) {
            throw new Exception("Page not found");
        }

        if ($selectedRoute->filepath) {
            return $selectedRoute->filepath;
        }
    }

    private function selectRoute(Route $route, string $method, string $path)
    {
        if ($route->method === $method && $route->path === $path) {
            return $route;
        }
    }
}
