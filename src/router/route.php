<?php

namespace Src\Router;

class Route
{
    public $method;
    public $path;
    public $callback;

    public function __construct(string $method, string $path, callable $callback = null)
    {
        $this->method = $method;
        $this->path = $path;
        $this->callback = $callback;
    }
}
