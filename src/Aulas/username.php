<?php
namespace App\Aulas;

class Username {
    private $username;
    private $senha;

    public function __construct(string $email, string $senha)
    {

        if ($email === "") {
            $this -> username = "Email inválido";
            $this -> emaill = "Email inválido";
        } else {
            // Alternativa 1
            // $usernameFromEmail = explode("@", $email)[0];
            
            // Alternativa 2
            $posicaoArroba = strpos($email, "@");
            if ($posicaoArroba) {
                $usernameFromEmail = substr($email, 0, $posicaoArroba);
                $this -> username = $usernameFromEmail;
            }
            else {
                $this -> username = "Email inválido";
            }
        }

        $this -> senha = $senha;
    }

    public function getUsername(): string
    {
        return $this -> username;
    }

    public function validaSenha(string $senha): bool
    {
        if (strlen($senha) > 6) {
            return true;
        }

        $this -> senha = "Senha inválida";

        return false;
    }

    public function getSenha(): string 
    {
        $this -> validaSenha(trim($this -> senha));
        return $this -> senha;
    }
} 