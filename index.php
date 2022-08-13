<?php

use App\Conta\Agencia;
use App\Conta\ContaCorrente;
use App\ObjectValues\Endereco;
use App\Titular\Titular;

require __DIR__ . "/vendor/autoload.php";

try {
    $titular = new Titular(
        'Ruan Sales',
        '388.516.720-40',
        28,
        new Endereco(
            'Rua do Cliente',
            '26',
            'Recife',
            'Pernambuco'
        ),
        'emaildocliente@gmail.com'
    );

    $agencia = new Agencia(
        new Endereco(
            'Rua da Agencia',
            '283',
            'Cidade Da Agencia',
            'Pernambuco',
        ),
        '81988188448',
        '2983', 'agenciadomeubanco@gmail.com'
    );

    $contaCorrente = new ContaCorrente(
        1200,
        $titular,
        $agencia
    );
    var_dump($contaCorrente);
} catch (Exception $exception) {
    return $exception->getMessage();
}