<?php

namespace App\Conta;

use App\Titular\Titular;

class ContaCorrente extends Conta
{

    public function __construct(float $saldo, Titular $titular, Agencia $agencia)
    {
        $this->saldo = $saldo;
        $this->titular = $titular;
        $this->agencia = $agencia;
    }

}