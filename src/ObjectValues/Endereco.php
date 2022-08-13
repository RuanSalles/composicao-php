<?php

namespace App\ObjectValues;

class Endereco
{
    /** @var string */
    private string $logradouro;
    /** @var string */
    private string $numero;
    /**  @var string */
    private string $cidade;
    /** @var string */
    private string $estado;
    /** @var string */
    private string $complemento;

    /**
     * @param string $logradouro
     * @param string $numero
     * @param string $cidade
     * @param string $estado
     * @param string $complemento
     */
    public function __construct(
        string $logradouro,
        string $numero,
        string $cidade,
        string $estado,
        string $complemento = ''
    ) {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->complemento = $complemento;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->$name;
    }

    /**
     * @param string $name
     * @param $value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->$name = $value;
    }
}