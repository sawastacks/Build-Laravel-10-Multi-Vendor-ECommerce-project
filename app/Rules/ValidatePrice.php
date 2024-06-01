<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidatePrice implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $regex = '/^(\d+|\d+(\.\d{1,2})?|(\.\d{1,2}))$/';
        if( !preg_match($regex,$value) ){
            $fail("The {$attribute} is invalid.");
        }
    }
}
