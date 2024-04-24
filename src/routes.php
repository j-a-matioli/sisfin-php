<?php
use Sisfin\Router;
use Sisfin\Controllers\ClienteController;
use Sisfin\Controllers\ProdutoController;
use Sisfin\Controllers\FornecedorController;
use Sisfin\Controllers\HomeController;
use Sisfin\Controllers\VendaController;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/cliente', ClienteController::class, 'index');
$router->addRoute('/fornecedor', FornecedorController::class, 'index');
$router->addRoute('/fornecedor/produtos', ProdutoController::class, 'produtosPorFornecedor');
$router->addRoute('/produto', ProdutoController::class, 'index');
$router->addRoute('/venda', VendaController::class, 'index');
