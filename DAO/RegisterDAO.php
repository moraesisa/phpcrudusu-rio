<?php
namespace App\DAO;

use App\Model\RegisterModel;
use \PDO;


class RegisterDAO extends DAO
{
    private $conexao;

    public function __construct()
    {
        parent::__construct();       
    }

    function validationUserPass(RegisterModel $model) {
        $sql = "SELECT email, senha FROM usuario WHERE email = ? AND senha = ?";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->senha);

        $stmt->execute();

        if (empty($stmt->fetchObject())) {
            $sql = "INSERT INTO usuario VALUES (DEFAULT, ?, ?)";
            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->email);
            $stmt->bindValue(2, $model->senha);

            $stmt->execute();
        } else {
            return header("Location: /register/form");
        }
    }
}