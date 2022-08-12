<?php

namespace App\ObjectValues;

use Exception;

class CPF {
    private string $cpf;

    public function __construct(string $cpf)    {
      $this->cpf = $cpf;
        try {
        $regex = "/^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/";
        $validate = filter_var($this->cpf, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regex)));
        if(!$validate) {
            throw new Exception('CPF Inválido');
        }

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    public function resgataCPF():string
    {
        return $this->cpf;
    }
}