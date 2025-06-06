<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function given_1_returns_1(){
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->calculate(1);

        $this->assertEquals('1', $result);
    }

    /**
     * @test
     */
    public function given_2_returns_2(){
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->calculate(2);

        $this->assertEquals('2', $result);
    }

    /**
     * @test
     */
    public function given_3_returns_fizz()
    {
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->calculate(3);

        $this->assertEquals('fizz', $result);
    }

    /**
     * @test
     */
    public function given_5_returns_buzz(){
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->calculate(5);

        $this->assertEquals('buzz', $result);
    }

    /**
     * @test
     */
    public function given_15_returns_fizzbuzz(){
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->calculate(15);

        $this->assertEquals('fizzbuzz', $result);
    }

    /**
     * @test
     */
    public function given_17_returns_17(){
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->calculate(17);

        $this->assertEquals('17', $result);
    }

    /**
     * @test
     */
    public function given_13_returns_fizz(){
        $fizzbuzz = new FizzBuzz();

        $result = $fizzbuzz->calculate(13);

        $this->assertEquals('fizz', $result);
    }
}
