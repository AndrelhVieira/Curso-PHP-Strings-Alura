<?php
namespace App\Aulas;

class Endereco {
    private $enderecoFinal;

    public function __construct(string $endereco, string $cep) 
    {
        $enderecoCep = implode(" - ", [$endereco, $cep]);

        $this -> enderecoFinal = $enderecoCep;
    }

    public function getEndereco(): string
    {
        return $this -> enderecoFinal;
    }

}