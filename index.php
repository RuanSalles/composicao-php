<?php

use App\Conta\ContaCorrente;
use App\ObjectValues\CPF;
use App\Titular;

require __DIR__ . "/vendor/autoload.php";

try {
    $contaCorrente = new ContaCorrente(500, new Titular('Ruan Sales', new CPF('07259592400'), 28));
} catch (Exception $exception) {
    return $exception->getMessage();
}

var_dump($contaCorrente);
$contaCorrente->depositar(8901);
var_dump($contaCorrente);
try {
    $contaCorrente->sacar(12);
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($contaCorrente);