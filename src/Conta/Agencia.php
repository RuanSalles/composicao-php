<?php

namespace App\Conta;


use App\ObjectValues\Endereco;
use App\Traits\Email;

class Agencia
{
    use Email;

    private Endereco $enderecoAgencia;
    private string $telefone;
    private string $numeroAgencia;
    private string $email;

    /**
     * @throws \Exception
     */
    public function __construct(Endereco $enderecoagencia, string $telefone, string $numeroAgencia, string $email)
    {
        $this->enderecoAgencia = $enderecoagencia;
        $this->telefone = $telefone;
        $this->numeroAgencia = $numeroAgencia;
        $this->email = $this->validaEmail($email);

        if (!$this->email) {
            throw new \Exception('Email inválido');
        }
    }

    public function pegarEmailAgencia(): string
    {
        return $this->email;
    }

    public function pegarDadosAgencia():array
    {
        return [
            'endereco' => $this->enderecoAgencia,
            'telefone' => $this->telefone,
            'numeroAgencia' => $this->numeroAgencia,
            'email' => $this->email
        ];
    }
}