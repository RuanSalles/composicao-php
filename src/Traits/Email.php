<?php

namespace App\Traits;

trait Email
{
    /**
     * @param string $email
     * @return string|bool
     */
    public function validaEmail(string $email): string|bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}