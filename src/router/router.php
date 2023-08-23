<?php

declare(strict_types=1);

namespace Src\Router;

class Router
{
    private $routes = [];

    public function setRoute(Route $route)
    {
        array_push($this->routes, $route);
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function selectRoute(string $method, string $path)
    {
        $selectedRoute = array_filter($this->routes, fn ($route) => $this->findRoute($route, $method, $path))[0];

        if (!$selectedRoute) {
            return '404';
        }

        call_user_func($selectedRoute->callback);
    }

    private function findRoute(Route $route, string $method, string $path)
    {
        if ($route->method === $method && $route->path === $path) {
            return $route;
        }
    }
}
