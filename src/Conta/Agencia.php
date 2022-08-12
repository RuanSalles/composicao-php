<?php

namespace App\Conta;

use App\ObjectValues\Email;
use App\ObjectValues\Endereco;

class Agencia
{
    private Endereco $enderecoAgencia;
    private string $telefone;
    private string $numeroAgencia;
    private Email $email;

    public function __construct(Endereco $enderecoagencia, string $telefone, string $numeroAgencia, Email $email)
    {
        $this->enderecoAgencia = $enderecoagencia;
        $this->telefone = $telefone;
        $this->numeroAgencia = $numeroAgencia;
        $this->email = $email;
    }

    public function pegarEmailAgencia(): Email
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