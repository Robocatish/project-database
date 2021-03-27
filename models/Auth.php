<?php


namespace App\models;
use PDO;

class Auth
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    public function auth($email,$password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
        $stmt->execute([
            'email'=>$email,
            'password'=>$password,
        ]);
        return $stmt->fetch();
    }

    public function register($name,$email,$password)
    {
        if($this->auth($email,$password)){
            return -1;
        }
        $stmt=$this->pdo->prepare("INSERT INTO users (name, email, password) values(:name, :email, :password)");
        $stmt->execute([
            'name'=>$name,
            'email'=>$email,
            'password'=> password_hash($password, PASSWORD_DEFAULT),
        ]);
        return $this->pdo->lastInsertId();
    }
}