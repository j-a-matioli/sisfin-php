<?php
namespace Sisfin\Controllers;
use Sisfin\Controller;
use Sisfin\Models\User;
use Sisfin\Util\TipoPessoa;
class UserController extends Controller {
    public function index() {
        $users = [
            new User('João das Dores', 'jodor@example.com',TipoPessoa::PESSOA_FISICA->value),
            new User('Maria Atanazia', 'mata@example.com',TipoPessoa::PESSOA_JURIDICA->value),
            new User('Calota Richio', 'carris@example.com',TipoPessoa::PESSOA_FISICA->value)
        ];
        $this->render('user/index', ['users' => $users]);
    }
}
    