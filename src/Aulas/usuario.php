<?php
namespace App\Aulas;

class Usuario {
    private $nome;
    private $sobrenome;
    private $genero;
    private $tratamento;

    public function __construct(string $nome, string $genero)
    {
        $nomeSobrenome = explode(" ", $nome, 2);

        if ($nomeSobrenome[0] == "") {
            $this -> nome = "Nome inválido!";
        } else {
            $this -> nome = $nomeSobrenome[0];
        }
        
        if (count($nomeSobrenome) > 1) {
            if ($nomeSobrenome[1] == null) {
                $this -> sobrenome = "Sobrenome inválido!";
            } else {
                $this -> sobrenome = $nomeSobrenome[1];
            }
        } else {
            $this -> sobrenome = "Sobrenome inválido!";
        }

        $this -> trataSobrenome($nome, $genero);
    }

    private function trataSobrenome(string $nome, string $genero): void
    {
        if ($genero === "M") {
            $this -> tratamento = preg_replace("/[A-Za-zÀ-ü]+\b/", "Sr.", $nome, limit: 1);
        } else {
            $this -> tratamento = preg_replace("/[A-Za-zÀ-ü]+\b/", "Sr.", $nome, limit: 1);
        }
    }

    public function getNome(): string
    {
        return $this -> nome;
    }

    public function getSobrenome(): string
    {
        return $this -> sobrenome;
    }

    public function getTratamentoSobrenome(): string
    {
        return $this -> tratamento;
    }
}
 