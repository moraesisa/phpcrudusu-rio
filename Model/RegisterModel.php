<?php
namespace App\Model;

use App\DAO\RegisterDAO;

class RegisterModel extends Model
{
public $id, $email
, $senha1, $senha2;

public function autenticar()
{
    include "./DAO/RegisterDAO.php";
    $dao = new RegisterDAO();
    $dao->validationUserPass($this);
}
}