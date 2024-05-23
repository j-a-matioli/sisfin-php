<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\ClienteService;
use Sisfin\Models\Cliente;
use Sisfin\Util;

class ClienteController  extends Controller
{
    private ClienteService $clienteRepository;

    public function __construct()
    {
        $this->clienteRepository = new ClienteService();
    }

    public function getAll(): array
    {
        return $this->clienteRepository->getAll();
    }

    public function getById($id):array{
         $result = $this->clienteRepository->getById($id);
        return $result;
    }

    public function index(): void
    {
        $this->render('cliente/index', ['clientes' => $this->getAll()]);
    }

    public function findByClienteId(){
        $id = $_GET["id"];
        $this->render('cliente/index', ['clientes' =>  $this->getById($id)]);
    }

    public function insertCliente()
    {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $this->clienteRepository->save(new Cliente($id, $nome, $email,Util\TipoPessoa::PESSOA_FISICA));
    }

}