<?php
namespace controllers\auth;

use controllers\Controller;

class AuthController extends Controller {

    public function login_index() {
        $conn = $this->getDatabase();

        $query = $conn->prepare('SELECT * FROM users');
        $query->execute();

//        var_dump($query->fetchAll());


        return $this->view('auth.login');
    }

    public function login() {
//        var_dump($_POST);

        return $this->redirectToRoute('page.auth.login', [
            'error' => 'Impossible de trouver l\'utilisateur'
        ]);
    }

}