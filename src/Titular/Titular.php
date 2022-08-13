<?php

namespace App\Titular;


use App\ObjectValues\Endereco;
use App\Traits\CPF;
use App\Traits\Email;

class Titular
{
    use CPF;
    use Email;

    private string $nome;
    private string $cpf;
    private int $idade;
    private Endereco $endereco;
    private string $email;

    /**
     * @throws \Exception
     */
    public function __construct(string $nome, string $cpf, int $idade, Endereco $endereco, string $email)
    {
        $this->cpf = $this->validaCPF($cpf);
        $this->email = $this->validaEmail($email);
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;

        if (!$this->cpf) {
            throw new \Exception('CPF Inválido');
        }

        if (!$this->email) {
            throw new \Exception('Email inválido');
        }
    }

    public function resgataCPF(): string
    {
        return $this->cpf;
    }

    public function resgatarEndereco(): array
    {
        return $this->endereco->pegarEndereco();
    }

}