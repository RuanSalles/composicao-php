<?php

namespace App\Conta\Interfaces;

interface ContaInterface
{
    public function verificaSaldo(): float;
    public function depositar(float $valor): void;
    public function sacar(float $valor): void;
    public function mostrarSaldo():string;
}