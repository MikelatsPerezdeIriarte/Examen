<?php

namespace Examen\Test;
use Examen\Library;
use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase
{
    /**
     * @test
     */
    public function givenBookAndQuantityReturnsAddedBook(){
        $library = new Library();
        $library->addBook(["prestar","dune", "2"]);
        $this->assertEquals(" dune x2", $library->getRegister());
    }

    /**
     * @test
     */
    public function givenBookWithNoQuantityReturnsAddedBook(){
        $library = new Library();
        $library->addBook(["prestar","dune"]);
        $this->assertEquals(" dune x1", $library->getRegister());
    }

    /**
     * @test
     */
    public function givenBookThatExistsReturnsRemovedBook(){
        $library = new Library();
        $library->addBook(["prestar","dune", "2"]);
        $result = $library->removeBook(["devolver","dune"]);
        $this->assertEquals("dune x1", $result);
    }

    /**
     * @test
     */
    public function givenBookThatDoesntExistReturnsRemovedBook(){
        $library = new Library();
        $result = $library->removeBook(["devolver","dune"]);
        $this->assertEquals("El libro indicado no está en préstamo", $result);
    }


}