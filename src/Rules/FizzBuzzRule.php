<?php

namespace Deg540\CleanCodeKata9\Rules;

class FizzBuzzRule implements Rule
{
    public function isValid(int $number): bool
    {
        return $number % 15 == 0;
    }

    public function getValue(): string
    {
        return 'fizzbuzz';
    }
}