<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\Cliente;
use Sisfin\Models\Produto;
use Sisfin\Util\TipoPessoa;

class ClienteController  extends Controller
{
    public function index():void {
        $this->render('cliente/index', ['clientes' => Cliente::getAll()]);
    }

}