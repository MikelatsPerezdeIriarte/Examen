<?php

namespace Deg540\CleanCodeKata9\Rules;

class BuzzRule implements Rule
{
    public function isValid(int $number): bool
    {
        return $number % 5 == 0;
    }

    public function getValue(): string
    {
        return 'buzz';
    }
}