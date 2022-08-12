<?php

namespace App\Conta;

use App\Titular;
use Exception;

class ContaCorrente extends Conta
{
    protected float $saldo = 0;
    protected object $titular;

    public function __construct(float $saldo, Titular $titular)
    {
        $this->saldo = $saldo;
        $this->titular = $titular;
    }

    public function verificaSaldo(): float
    {
        return $this->saldo;
    }

    public function depositar(float $valor): void
    {
        $this->saldo += $valor;
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
        } catch (Exception $exception)  {
            echo $exception->getMessage();
        }
    }
}