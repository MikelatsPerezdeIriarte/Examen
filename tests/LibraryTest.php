<?php

namespace Examen\Test;
use Examen\Library;
use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase
{
    /**
     * @test
     */
    public function givenBookReturnsAddedBook(){
        $library = new Library();
        $library->addBook(["prestar","dune", "2"]);
        $this->assertEquals("dune x2", $library->getRegister());
    }
}