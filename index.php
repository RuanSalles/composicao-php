<?php

use App\Conta\Agencia;
use App\Conta\ContaCorrente;
use App\ObjectValues\CPF;
use App\ObjectValues\Email;
use App\ObjectValues\Endereco;
use App\Titular;

require __DIR__ . "/vendor/autoload.php";

try {
    $contaCorrente = new ContaCorrente(
        1200,
        new Titular('Ruan Sales',
            new CPF('388.516.720-40'),
        28,
        new Endereco('Rua do Cliente',
        '26',
        'Recife',
        'Pernambuco'),
        new Email('emaildocliente@gmail.com')
        ),
        new Agencia(new Endereco('Rua da Agencia',
        '283',
        'Cidade Da Agencia',
        'Pernambuco',),
        '81999208451',
        '2983',
        new Email('agenciadomeubanco@gmail.com'))
    );
var_dump($contaCorrente);
} catch (Exception $exception) {
    return $exception->getMessage();
}