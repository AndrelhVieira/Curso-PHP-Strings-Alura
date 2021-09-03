<?php
namespace App\Aulas;

class Telefone {
    private $telefone;

    public function __construct(string $telefone)
    {
        if ($this -> validaTelefone($telefone)) {
            $this -> setTelefone($telefone);
        } else {
            $this -> setTelefone("Telefone inválido");
        }
        
    }
    
    private function validaTelefone(string $telefone): int {
        return preg_match("/^[0-9]{4}-[0-9]{4}$/", $telefone);
    }

    private function setTelefone(string $valor): void
    {
        $this -> telefone = $valor;
    }

    public function getTelefone(): string
    {
        return $this -> telefone;
    }
}