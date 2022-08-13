<?php

namespace App\Conta;

use App\Titular\Titular;

class ContaCorrente extends Conta
{

    /**
     * @param float $saldo
     * @param Titular $titular
     * @param Agencia $agencia
     */
    public function __construct(float $saldo, Titular $titular, Agencia $agencia)
    {
        $this->saldo = $saldo;
        $this->titular = $titular;
        $this->agencia = $agencia;
    }

}