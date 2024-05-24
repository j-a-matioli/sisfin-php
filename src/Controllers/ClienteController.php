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
        $id = empty($_GET['id'])?null:$_GET['id'];
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $tipoPessoa = $_GET['tipopessoa'];
        $this->clienteRepository->save(new Cliente($id, $nome, $email, $tipoPessoa));
    }
    public function editCliente()
    {
        $id = isset($_GET['id'])?$_GET['id']:0;
        $dados = $this->clienteRepository->getById($id);
        $this->render('cliente/edit', ['cliente' =>  $dados]);
    }
    public function deleteCliente()
    {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $this->clienteRepository->delete($id);
    }

}