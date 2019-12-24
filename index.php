<?php

namespace Skywalker\Root;

require_once 'config/system-structure.php';
require_once 'lib/core/Kernel.php';

$app = new \Skywalker\Core\Kernel();
$app->boot();

$requestedRoute = $_SERVER['REQUEST_URI'];
$app->serve($requestedRoute);

