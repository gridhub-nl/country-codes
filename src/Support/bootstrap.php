<?php

if (interface_exists(\Illuminate\Contracts\Validation\ValidationRule::class)) {
    require_once __DIR__.'/ValidationCountryCodeRule.php';
} else {
    require_once __DIR__.'/CountryCodeRule.php';
}
