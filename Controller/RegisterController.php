<?php

namespace App\Controller;

use App\Model\RegisterModel;

class RegisterController extends Controller
{
    public static function index()
    {
        parent::render('Register/FormRegister');
    }

    public static function auth()
    {
        $model = new RegisterModel();

        $model->email = $_POST['email'];
        $model->senha = $_POST['senha1'];
        $model->senha = $_POST['senha2'];
        $model->autenticar();
    }
}