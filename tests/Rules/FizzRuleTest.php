<?php

use Deg540\CleanCodeKata9\Rules\FizzRule;
use PHPUnit\Framework\TestCase;

class FizzRuleTest  extends TestCase
{
    /**
     * @test
     */
    public function given_3_rule_is_valid()
    {
        $fizzbuzz = new FizzRule();

        $result = $fizzbuzz->isValid(3);

        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function given_5_rule_is_not_valid()
    {
        $fizzbuzz = new FizzRule();

        $result = $fizzbuzz->isValid(5);

        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function given_a_number_that_does_not_contain_a_3_and_is_not_divisible_by_3_is_not_valid()
    {
        $fizzbuzz = new FizzRule();

        $result = $fizzbuzz->isValid(41);

        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function given_a_number_that_contains_a_3_and_is_not_divisible_by_3_is_valid()
    {
        $fizzbuzz = new FizzRule();

        $result = $fizzbuzz->isValid(31);

        $this->assertTrue($result);
    }

}