<?php

namespace App;

use App\ObjectValues\CPF;
use App\ObjectValues\Email;
use App\ObjectValues\Endereco;

class Titular
{
    private string $nome;
    private CPF $cpf;
    private int $idade;
    private Endereco $endereco;
    private Email $email;

    public function __construct(string $nome, CPF $cpf, int $idade, Endereco $endereco, Email $email)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->email = $email;
    }

    public function resgataCPF(): string
    {
        return $this->cpf->resgataCPF();
    }

    public function resgatarEndereco():array {
        return $this->endereco->pegarEndereco();
    }

}