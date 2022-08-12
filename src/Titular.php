<?php

namespace App;

use App\ObjectValues\CPF;

class Titular
{
    private string $nome;
    private CPF $cpf;
    private int $idade;

    public function __construct(string $nome, CPF $cpf, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;

    }

    public function resgataCPF(): string
    {
        return $this->cpf->resgataCPF();
    }

}