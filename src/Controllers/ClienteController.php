<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\ClienteService;
use Sisfin\Models\Cliente;
use Sisfin\Models\ClienteValidator;
use Sisfin\Util;

class ClienteController  extends Controller
{
    public $erros=array();
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
        $validator = new ClienteValidator();

        $id = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT): null;
        $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
        $email = isset($_GET['email']) ?  $_GET['email'] : null;
        $tipoPessoa = isset($_GET['tipopessoa']) ? $_GET['tipopessoa'] : null;


        $cliente = new Cliente();
        $cliente->setId($id);
        $cliente->setTipoPessoa($tipoPessoa);
        $cliente->setNome($nome);
        $cliente->setEmail($email);

        if(!$validator->Validate($cliente)) {
             $this->render('cliente/index', ['clientes'=>$this->getAll()], $cliente, ['errors' =>  $validator->getErrors()]);
             die;
        }

        //se chegar aqui é porque os dados foram validados
        $this->clienteRepository->save($cliente);
        header("Location: /cliente");
    }
    public function editCliente()
    {
        $id = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT): null;
        $dados = $this->clienteRepository->getById($id);

        if(count($dados)>0) {
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente->setTipoPessoa($dados[0]["tipopessoa"]);
            $cliente->setNome($dados[0]["nome"]);
            $cliente->setEmail($dados[0]["email"]);
            $this->render('cliente/index', ['clientes'=>$this->getAll()], $cliente, ['errors' =>  null]);
        }else{
            header("Location: /cliente");
        }

    }
    public function deleteCliente()
    {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $this->clienteRepository->delete($id);
    }

}