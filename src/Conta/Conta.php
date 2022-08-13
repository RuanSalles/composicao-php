<?php

namespace App\Conta;

use App\Conta\Interfaces\ContaInterface;
use Exception;

abstract class Conta implements ContaInterface
{
    /** @var object */
    protected object $titular;
    /** @var float */
    protected float $saldo;
    /** @var Agencia */
    protected Agencia $agencia;

    /**
     * @return float
     */
    public function verificaSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float $valor
     * @return void
     */
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
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * @return string
     */
    function mostrarSaldo(): string
    {
        return "Seu saldo é de R$ $this->saldo";
    }

}