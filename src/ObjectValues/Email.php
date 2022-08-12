<?php

namespace App\ObjectValues;

use Exception;
class Email
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
        try {
            $validate = filter_var($this->email, FILTER_VALIDATE_EMAIL);
            if(!$validate) {
               return  throw new Exception('E-mail Inválido, verifique os dados');
            }

        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}