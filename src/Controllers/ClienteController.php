<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\ClienteService;

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

}