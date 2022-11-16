<?php

use App\Controller\LoginController;
use App\Controller\RegisterController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

    case '/':
        echo "página inicial";
        break;
    
    case '/register/form':
        RegisterController::index();
    
    case '/register/auth':
        RegisterController::auth();

    default:
        echo "Erro 404";
        break;
}