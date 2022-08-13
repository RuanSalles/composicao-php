<?php

namespace App\Traits;

/**
 *
 */
trait CPF
{
    /**
     * Valida o CPF com o sem pontuação retornando o CPF se válido ou falso em caso de inválido
     * @param string $cpf
     * @return string|bool
     */
    public function validaCPF(string $cpf): string|bool
    {
        $regex = "/^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/";
        $validate = filter_var(
            $cpf,
            FILTER_VALIDATE_REGEXP,
            array("options" => array("regexp" => $regex))
        );

        if($validate) {
            return $this->formataCPF($cpf);
        }
        return false;
    }

    /**
     * @param string $cpf
     * @return string
     */
    private function formataCPF(string $cpf): string
    {
        if(strpos($cpf, '.')) {
            $cpf = str_replace(['.', '-'], '', $cpf);
        }

        return $cpf;
    }
}