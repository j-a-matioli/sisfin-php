<?php
use Sisfin\Router;
use Sisfin\Controllers\ClienteController;
use Sisfin\Controllers\ProdutoController;
use Sisfin\Controllers\FornecedorController;
use Sisfin\Controllers\HomeController;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/cliente', ClienteController::class, 'index');
$router->addRoute('/fornecedor', FornecedorController::class, 'index');
$router->addRoute('/fornecedor/produtos', ProdutoController::class, 'getProdutosFornecedor');
$router->addRoute('/produto', ProdutoController::class, 'index');
