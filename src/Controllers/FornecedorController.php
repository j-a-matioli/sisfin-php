<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\Fornecedor;
use Sisfin\Util\TipoPessoa;

class FornecedorController  extends Controller
{
    public function index():void {
        $this->render('fornecedor/index', ['fornecedores' => Fornecedor::getAll()]);
    }

}