<?php

namespace App\ObjectValues;

class Endereco
{
    private string $logradouro;
    private string $numero;
    private string $cidade;
    private string $estado;
    private string $complemento;

    public function __construct(string $logradouro, string $numero, string $cidade, string $estado, string $complemento = '')
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->complemento = $complemento;
    }

    public function pegarEndereco(): array
    {
        return [
            'logradouro' => $this->logradouro,
            'numero' => $this->numero,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'complemento' => $this->complemento,
        ];
    }

    public function alterarEndereco($endereco): void
    {
        if(!is_null($endereco)) {
            foreach ($endereco as $key => $value) {
                $this->$key = $value;
            }
        }
    }
}