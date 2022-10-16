<?php

require_once './app/models/auth.model.php';
require_once './app/views/auth.view.php';

class authController{
    private $view;
    private $model;

    public function __construct() {
        $this->model = new authModel();
        $this->view = new authView();
    }

    public function showFormLogin() {
        $this->view->showFormLogin();
    }

    public function validateUser() {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUserByEmail($email);

            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION['USER_ID'] = $user->id;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['IS_LOGGED'] = true;

                header("Location: " . BASE_URL . "home");
            } else {
                $this->view->showFormLogin("El usuario o la contraseña no existen.");
            }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "login");
    }

}

?>