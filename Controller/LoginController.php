<?php

namespace App\Controller;

use App\Model\LoginModel;

class LoginController extends Controller
{
    public static function index()
    {
        parent::render('Login/FormLogin');
    }

    public static function auth()
    {
        $model = new LoginModel();

        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $usuario_logado = $model->autenticar();

       
    }

    public static function logout()
    {
        unset($_SESSION['usuario_logado']);

        parent::isAuthenticated();
    }
}
