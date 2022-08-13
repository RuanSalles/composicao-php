<?php

namespace App\Titular;


use App\ObjectValues\Endereco;
use App\Traits\CPF;
use App\Traits\Email;
use Exception;

class Titular
{
    use CPF;
    use Email;

    /** @var string */
    private string $nome;
    /** @var string */
    private string $cpf;
    /** @var int */
    private int $idade;
    /** @var Endereco */
    private Endereco $endereco;
    /** @var string */
    private string $email;

    /**
     * @param string $nome
     * @param string $cpf
     * @param int $idade
     * @param Endereco $endereco
     * @param string $email
     * @throws Exception
     */
    public function __construct(
        string $nome,
        string $cpf,
        int $idade,
        Endereco $endereco,
        string $email
    ) {
        $this->cpf = $this->validaCPF($cpf);
        $this->email = $this->validaEmail($email);
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;

        if (!$this->cpf) {
            throw new Exception('CPF Inválido');
        }

        if (!$this->email) {
            throw new Exception('Email inválido');
        }
    }

    /**
     * @return string
     */
    public function resgataCPF(): string
    {
        return $this->cpf;
    }

    /**
     * @return array
     */
    public function resgatarEndereco(): array
    {
        return $this->endereco->pegarEndereco();
    }

}