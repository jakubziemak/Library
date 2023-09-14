<?php

namespace Src\Models;

class Route
{
    private string $method;
    private string $URLPath;
    private array $cb;

    public function __construct(string $method, string $URLPath, array $cb)
    {
        $this->method = $method;
        $this->URLPath = $URLPath;
        $this->cb = $cb;
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
        call_user_func($this->cb);
    }
}
