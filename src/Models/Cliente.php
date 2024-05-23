<?php

namespace Sisfin\Models;

use Sisfin\Util\Connection;
use Sisfin\Util\TipoPessoa;
use \PDO;

class Cliente
{
    private ?int $_id;
    private int $_tipoPessoa;
    private string $_nome;
    private string $_email;

    /**
     * @param int $_id
     * @param string $_nome
     * @param string $_email
     */
    public function __construct(?int $_id, string $_nome, string $_email, int $tipoPessoa)
    {
        $this->_id = $_id;
        $this->_nome = $_nome;
        $this->_email = $_email;
        $this->_tipoPessoa=$tipoPessoa;
    }


    public function getTipoPessoa(): int
    {
        return $this->_tipoPessoa;
    }

    public function setTipoPessoa(int $tipoPessoa): Cliente
    {
        $this->_tipoPessoa = $tipoPessoa;
        return $this;
    }
    public function getId(): ?int
    {
        return $this->_id;
    }

    public function setId(int $id): Cliente
    {
        $this->_id = $id;
        return $this;
    }

    public function getNome(): string
    {
        return $this->_nome;
    }

    public function setNome(string $nome): Cliente
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->_email;
    }

    public function setEmail(string $email): Cliente
    {
        $this->_email = $email;
        return $this;
    }
    public static function getAll(): array{

        try{
            $cn = Connection::make();
            $sql = "SELECT * FROM cliente";
            $result = $cn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }catch(\PDOException $ex){
            return array(null);
        }
/*
        $lstClientes = array();

        $lstClientes[]=new Cliente(1,'João das Dores', 'jodor@example.com',TipoPessoa::PESSOA_FISICA);
        $lstClientes[]=new Cliente(2,'Maria Atanazia', 'mata@example.com',TipoPessoa::PESSOA_JURIDICA);
        $lstClientes[]=new Cliente(3,'Carlota Richio', 'carris@example.com',TipoPessoa::PESSOA_FISICA);
        return $lstClientes;
*/
    }
}