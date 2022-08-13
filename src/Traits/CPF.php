<?php

namespace App\Traits;

trait CPF
{
    public function validaCPF(string $cpf): string|bool
    {
        $regex = "/^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/";
        $validate = filter_var($cpf, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regex)));

        if($validate) {
            return $this->formataCPF($cpf);
        }
        return false;
    }

    private function formataCPF(string $cpf): string
    {
        if(strpos($cpf, '.')) {
            $cpf = str_replace(['.', '-'], '', $cpf);
        }

        return $cpf;
    }
}