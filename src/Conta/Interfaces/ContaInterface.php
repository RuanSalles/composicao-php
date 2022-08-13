<?php

namespace App\Conta\Interfaces;

interface ContaInterface
{
    /**
     * @return float
     */
    public function verificaSaldo(): float;

    /**
     * @param float $valor
     * @return void
     */
    public function depositar(float $valor): void;

    /**
     * @param float $valor
     * @return void
     */
    public function sacar(float $valor): void;

    /**
     * @return string
     */
    public function mostrarSaldo():string;
}