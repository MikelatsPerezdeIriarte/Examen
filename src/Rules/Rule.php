<?php

namespace Deg540\CleanCodeKata9\Rules;

interface Rule
{
    public function isValid(int $number): bool;
    public function getValue(): string;
}