<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\Venda;
use Sisfin\Models\ProdutoService;

class VendaController extends  Controller
{
    public function getAll(): array
    {
        return Venda::getAll();
    }

    public function index(): void
    {
        $this->render('venda/index', ['vendas' => Venda::getAll()]);
    }

    public function getVendasCliente(){
        $idCliente = $_GET['idCliente'];
        $lstVendas=[];
        foreach (Venda::getAll() as $venda){
            if($venda->getVendas()->getId()==$idCliente){
                array_push($lstVendas,$venda);
            }
        }
        $this->render('venda/index', ['vendas' => $lstVendas]);
    }

}