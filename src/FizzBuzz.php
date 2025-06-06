<?php

namespace Examen;

use Examen\Rules\BuzzRule;
use Examen\Rules\FizzBuzzRule;
use Examen\Rules\FizzRule;
use Examen\Rules\Rule;

class FizzBuzz
{
    private $rules;

    public function __construct()
    {
        $this->loadRules();
    }

    private function loadRules(): void
    {
        $this->rules[] = new FizzBuzzRule();
        $this->rules[] = new FizzRule();
        $this->rules[] = new BuzzRule();
    }

    public function calculate(int $numberToBeConvented): string
    {
        $validRules = array_values(
            array_filter($this->rules, function (Rule $rule) use ($numberToBeConvented) {
                return $rule->isValid($numberToBeConvented);
            })
        );

        if (empty($validRules)) {
            return ($numberToBeConvented);
        }

        return $validRules[0]->getValue();
    }
}
