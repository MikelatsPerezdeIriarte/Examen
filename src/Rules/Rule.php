<?php

namespace Examen\Rules;

interface Rule
{
    public function isValid(int $number): bool;
    public function getValue(): string;
}