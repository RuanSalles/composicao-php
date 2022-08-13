<?php

namespace App\Conta;


use App\ObjectValues\Endereco;
use App\Traits\Email;
use Exception;

class Agencia
{
    use Email;

    /** @var Endereco */
    private Endereco $enderecoAgencia;
    /** @var string */
    private string $telefone;
    /** @var string */
    private string $numeroAgencia;
    /** @var string */
    private string $email;

    /**
     * @throws Exception
     */
    public function __construct(
        Endereco $enderecoagencia,
        string $telefone,
        string $numeroAgencia,
        string $email
    ) {
        $this->enderecoAgencia = $enderecoagencia;
        $this->telefone = $telefone;
        $this->numeroAgencia = $numeroAgencia;
        $this->email = $this->validaEmail($email);

        if (!$this->email) {
            throw new Exception('Email inválido');
        }
    }

    /**
     * @return string
     */
    public function pegarEmailAgencia(): string
    {
        return $this->email;
    }

    /**
     * @return array
     */
    public function pegarDadosAgencia(): array
    {
        return [
            'endereco' => $this->enderecoAgencia,
            'telefone' => $this->telefone,
            'numeroAgencia' => $this->numeroAgencia,
            'email' => $this->email
        ];
    }
}