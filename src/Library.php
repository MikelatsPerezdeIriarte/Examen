<?php

namespace Examen;

class Library
{
    private String $register;

    public function __construct()
    {
        $this->register = "";
    }

    public function getRegister(): string
    {
        return $this->register;
    }

    public function setRegister(string $register): void
    {
        $this->register = $register;
    }

    public function executeRegister(){
        $input = readline("Ingresa la acción a realizar:");
        $parts = explode(" ", $input);
        switch ($parts[0]) {
            case 'prestar':
                $this->addBook($parts);
                break;
            case 'devolver':
                $this->removeBook($parts);
                break;
            case 'limpiar':
                $this->emptyRegister();
                break;
        }
    }

    public function addBook($parts)
    {
        if (str_contains($parts[1], $this->register)) {
            $books = explode(",", $this->register);
            foreach ($books as $book) {
                if (str_contains($parts[1], $book)) {
                    preg_match_all('/\d+/', $book, $matches);
                    try {
                        $total = (int)$parts[2] + (int)$matches[0];
                    } catch (\Throwable) {
                        $total = 1 + (int)$matches[2];
                    }
                    $book = $parts[1] . " x" . $total;
                }
                $newBooks[] = $book;
            }
            $this->register = implode(",", $newBooks);
        } else {
            $this->register = $this->register . $parts[1] . " x" . $parts[2];
        }
    }

    public function removeBook()
    {

    }

    public function emptyRegister()
    {

    }
}