<?php

namespace Skywalker\Core;

require_once 'Routing.php';
require_once 'Autoloader.php';

class Kernel
{
    public function boot()
    {
        global $routes;
        $this->routing = new \Skywalker\Core\Routing($routes);
        $this->fileSystem = new \Skywalker\Core\FileSystem();
        (new \Skywalker\Core\Autoloader($this->fileSystem))::init($this->fileSystem);
    }

    public function serve(string $requestedRoute)
    {
        if (array_key_exists($requestedRoute, $this->routing->getRoutes()) && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $className = '\\Skywalker\\Controller\\' . ucfirst($this->routing->getRoute($requestedRoute));
            $controller = new $className();
            $controller->execute();
        }
    }
}