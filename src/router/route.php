<?php

namespace Src\Router;

class Route
{
    public $method;
    public $path;
    public $filepath;

    public function __construct(string $method, string $path, string $filepath = null)
    {
        $this->method = $method;
        $this->path = $path;
        $this->filepath = $filepath;
    }
}
