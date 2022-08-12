<?php

namespace App\Conta;

abstract class Conta
{
    protected object $titular;
    protected float $saldo;


    abstract function verificaSaldo(): float;
    abstract function depositar(float $valor): void;
    abstract function sacar(float $valor): void;
    abstract function mostrarSaldo():mixed;
}