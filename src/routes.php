<?php

use Sisfin\Router;
use Sisfin\Controllers\ClienteController;
use Sisfin\Controllers\HomeController;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/cliente', ClienteController::class, 'index');
    