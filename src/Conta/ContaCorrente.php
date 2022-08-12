<?php

namespace App\Conta;

use App\Titular;
use Exception;

class ContaCorrente extends Conta
{
    protected float $saldo = 0;
    protected object $titular;
    protected Agencia $agencia;

    public function __construct(float $saldo, Titular $titular, Agencia $agencia)
    {
        $this->saldo = $saldo;
        $this->titular = $titular;
        $this->agencia = $agencia;
    }

    public function verificaSaldo(): float
    {
        return $this->saldo;
    }

    public function depositar(float $valor): void
    {
        $this->saldo += $valor;
        echo "Depósito de $valor efetuado com sucesso" . PHP_EOL;
    }

    /**
     * @throws Exception
     */
    public function sacar(float $valor): void
    {
        try {
            if ($this->saldo < $valor) {
                throw new Exception('Saldo insuficiente');
            }
            $this->saldo -= $valor;
            echo "Saque de R$ $valor foi efetuado com sucesso" . PHP_EOL;
        } catch (Exception $exception)  {
            echo $exception->getMessage();
        }
    }

    function mostrarSaldo(): string
    {
        return "Seu saldo é de R$ $this->saldo";
    }
}