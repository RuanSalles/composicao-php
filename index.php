<?php

use App\Conta\ContaCorrente;
use App\ObjectValues\CPF;
use App\Titular;

require __DIR__ . "/vendor/autoload.php";

try {
    $contaCorrente = new ContaCorrente(500, new Titular('Ruan Sales', new CPF('07259592400'), 28));
    var_dump($contaCorrente);
} catch (Exception $exception) {
    return $exception->getMessage();
}