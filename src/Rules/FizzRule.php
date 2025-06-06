<?php

namespace Examen\Rules;

class FizzRule implements Rule
{
    public function isValid(int $number): bool
    {
        return $number % 3 == 0 || strpos(strval($number), '3') !== false;
    }

    public function getValue(): string
    {
        return 'fizz';
    }
}