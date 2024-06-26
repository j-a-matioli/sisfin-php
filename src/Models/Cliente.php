<?php

namespace Sisfin\Models;

use Sisfin\Util\TipoPessoa;

class Cliente
{
    private int $_id;
    private TipoPessoa $_tipoPessoa;
    private string $_nome;
    private string $_email;

    /**
     * @param int $_id
     * @param string $_nome
     * @param string $_email
     */
    public function __construct(int $_id, string $_nome, string $_email, TipoPessoa $tipoPessoa)
    {
        $this->_id = $_id;
        $this->_nome = $_nome;
        $this->_email = $_email;
        $this->_tipoPessoa=$tipoPessoa;
    }


    public function getTipoPessoa(): TipoPessoa
    {
        return $this->_tipoPessoa;
    }

    public function setTipoPessoa(TipoPessoa $tipoPessoa): Cliente
    {
        $this->_tipoPessoa = $tipoPessoa;
        return $this;
    }
    public function getId(): int
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

}