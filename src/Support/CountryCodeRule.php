<?php

namespace LVR\CountryCode\Support;

use Illuminate\Contracts\Validation\Rule;

abstract class CountryCodeRule implements Rule
{
    abstract public function passes($attribute, $value);

    abstract public function message();
}
