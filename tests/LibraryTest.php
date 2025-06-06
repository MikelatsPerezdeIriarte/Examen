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
        $result = $library->executeRegister("prestar dune 2");
        $this->assertEquals(" dune x2", $result);
    }

    /**
     * @test
     */
    public function givenBookWithNoQuantityReturnsAddedBook(){
        $library = new Library();
        $result = $library->executeRegister("prestar dune");
        $this->assertEquals(" dune x1", $result);
    }

    /**
     * @test
     */
    public function givenBookThatExistsReturnsRemovedBook(){
        $library = new Library();
        $result = $library->executeRegister("prestar dune 2");
        $result =$library->executeRegister("devolver dune");
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

    /**
     * @test
     */
    public function emptyRegisterClearsRegister(){
        $library = new Library();
        $result = $library->executeRegister("prestar dune 2");
        $result = $library->emptyRegister();
        $this->assertEquals(" ", $library->getRegister());
    }

}