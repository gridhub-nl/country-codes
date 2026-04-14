<?php

namespace LVR\CountryCode\Support;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;

abstract class CountryCodeRule implements ValidationRule, Rule
{
    abstract public function passes($attribute, $value);

    abstract public function message();

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!$this->passes($attribute, $value)) {
            $fail($this->message());
        }
    }
}
