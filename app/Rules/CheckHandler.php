<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^@[a-zA-Z0-9_-]+$/', $value)) {
            $fail('Precisa começar com @ e apenas usar _- letras e numeros sem espaços.');
        }
//        $fail('Você não pode ter espaços nem outros caracteres que não sejam _ -');
    }
}
