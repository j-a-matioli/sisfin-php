<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\User;

class UserController extends Controller {
    public function index() {
        $users = [
            new User('João das Dores', 'jodor@example.com'),
            new User('Maria Atanazia', 'mata@example.com'),
            new User('Calota Richio', 'carris@example.com')
        ];

        $this->render('user/index', ['users' => $users]);
    }
}
    