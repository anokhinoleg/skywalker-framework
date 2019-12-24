<?php

namespace Skywalker\Core;

require_once PROJECT_ROOT_DIR . '/config/routes.php';
require_once 'Controller.php';

class Routing
{
    /**
     * @var string[]
     */
    private array $routes;

    /**
     * Routing constructor.
     * @param array $routes
     */
    public function __construct(array $routes = [])
    {
        $this->routes = $routes;
    }

    /**
     * @param string $path
     * @return string
     */
    public function getRoute(string $path) : string
    {
        return $this->routes[$path];
    }

    /**
     * @return array
     */
    public function getRoutes() : array
    {
        return $this->routes;
    }

    /**
     * @param string $path
     * @param string $route
     *
     * @return void
     */
    public function addRoute(string $path, string $route) : void
    {
        $this->routes[$path] = $route;
    }

    /**
     * @param array $routes
     *
     * @return void
     */
    public function addRoutes(array $routes) : void
    {
        foreach ($routes as $path => $route) {
            $this->addRoute($path, $route);
        }
    }
}
