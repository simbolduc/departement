<?php
namespace app\controllers\auth;

use app\controllers\Controller;

class AuthController extends Controller {

    public function login_index() {
        $conn = $this->getDatabase();

        $query = $conn->prepare('SELECT * FROM users');
        $query->execute();

//        var_dump($query->fetchAll());


        return $this->view('auth.login');
    }

    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = array();
        if($email != 'test@test.com')
            array_push($errors, 'Incorrect email address');

        if($password != '123123')
            array_push($errors, 'Incorrect password');

        return $this->redirectToRoute('page.auth.login', [
            'error' => $errors
        ]);
    }

}