<?php

namespace Src\Models;

class Route
{
    private string $method;
    private string $URLPath;
    private array $callback;

    public function __construct(string $method, string $URLPath, array $callback)
    {
        $this->method = $method;
        $this->URLPath = $URLPath;
        $this->callback = $callback;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getURLPath(): string
    {
        return $this->URLPath;
    }
    public function runController()
    {
        call_user_func($this->callback);
    }
}
