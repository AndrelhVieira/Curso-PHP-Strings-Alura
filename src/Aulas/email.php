<?php
namespace App\Aulas;

class Email {
    private $email;

    public function __construct(string $email)
    {
        
        if ($email === "") {
            $this -> email = "Email inválido";
        } else {
            $posicaoArroba = strpos($email, "@");
            if ($posicaoArroba) {
                $this -> email = $email;
            } else {
                $this -> email = "Email inválido";
            }
        }

        if ($this -> validateEmail($email) !== false)
        {
            $this -> email = $email;
        } else {
            $this -> email = "Email inválido";
        }

    }

    private function validateEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail()
    {
        return $this -> email;
    }
}