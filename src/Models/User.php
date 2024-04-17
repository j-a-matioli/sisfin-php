<?php

namespace Sisfin\Models;
use Sisfin\Util\TipoPessoa;

class User {
    public $name;
    public $email;
    public $tipoPessoa;

    public function __construct($name, $email, $tipoUser) {
        $this->name = $name;
        $this->email = $email;
        $this->tipoPessoa = $tipoUser;
    }
}
    