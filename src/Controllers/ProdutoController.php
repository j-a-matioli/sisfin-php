<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\Fornecedor;
use Sisfin\Models\Produto;
use Sisfin\Util\TipoPessoa;

class ProdutoController extends Controller
{
    public function getAll(): array
    {
        return Produto::getAll();
    }

    public function index(): void
    {
        $this->render('produto/index', ['produtos' => Produto::getAll()]);
    }

    public function getProdutosFornecedor(){
        $idFornecedor = $_GET['idfornecedor'];
        $lstProduto=[];
        foreach (Produto::getAll() as $produto){
            if($produto->getFornecedor()->getId()==$idFornecedor){
                array_push($lstProduto,$produto);
            }
        }
        $this->render('produto/index', ['produtos' => $lstProduto]);
    }
}