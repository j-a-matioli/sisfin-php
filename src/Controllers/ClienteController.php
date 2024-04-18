<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\Cliente;
use Sisfin\Util\TipoPessoa;

class ClienteController  extends Controller
{
    public function index():void {
        $clientes = [
            new Cliente(1,'João das Dores', 'jodor@example.com',TipoPessoa::PESSOA_FISICA),
            new Cliente(2,'Maria Atanazia', 'mata@example.com',TipoPessoa::PESSOA_JURIDICA),
            new Cliente(3,'Carlota Richio', 'carris@example.com',TipoPessoa::PESSOA_FISICA)
        ];

        $this->render('cliente/index', ['clientes' => $clientes]);
    }

}