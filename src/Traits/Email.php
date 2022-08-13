<?php

namespace App\Traits;

trait Email
{
    public function validaEmail(string $email): string|bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}