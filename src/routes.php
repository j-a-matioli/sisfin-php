<?php

use Sisfin\Router;
use Sisfin\Controllers\UserController;
use Sisfin\Controllers\HomeController;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/user', UserController::class, 'index');
    