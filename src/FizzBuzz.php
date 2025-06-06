<?php

namespace Deg540\CleanCodeKata9;

use Deg540\CleanCodeKata9\Rules\BuzzRule;
use Deg540\CleanCodeKata9\Rules\FizzBuzzRule;
use Deg540\CleanCodeKata9\Rules\FizzRule;
use Deg540\CleanCodeKata9\Rules\Rule;

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
