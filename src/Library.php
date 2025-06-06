<?php

namespace Examen;

use function PHPUnit\Framework\isArray;
use function PHPUnit\Framework\isString;

class Library
{
    private String $register;

    public function __construct()
    {
        $this->register = " ";
    }

    public function getRegister(): string
    {
        return $this->register;
    }

    public function setRegister(string $register): void
    {
        $this->register = $register;
    }

    public function executeRegister($input) : String
    {
        $parts = explode(" ", $input);
        switch ($parts[0]) {
            case 'prestar':
                $output = $this->addBook($parts);
                break;
            case 'devolver':
                $output = $this->removeBook($parts);
                break;
            case 'limpiar':
                $output = $this->emptyRegister();
                break;
        }
        return $output;
    }

    private function addBook($parts) : String
    {
        if (str_contains($this->register, $parts[1])) {
            $books = explode(",", $this->register);
            foreach ($books as $book) {
                if (str_contains($book, $parts[1])) {
                    preg_match_all('/\d+/', $book, $matches);
                    if (isset($parts[2])) {
                        $total = (int)$parts[2] + (int)$matches[0][0];
                    } else {
                        $total = 1 + (int)$matches[0][0];
                    }
                    $book = $parts[1] . " x" . $total;
                }
                $newBooks[] = $book;
            }
            $registerString = implode(",", $newBooks);
            return $this->register = $registerString;
        }
        if (isset($parts[2])){
            return $this->register = $this->register . $parts[1] . " x" . $parts[2];
        }
        return $this->register = $this->register . $parts[1] . " x1";
    }

    public function removeBook($parts) : String
    {
        if (str_contains($this->register, $parts[1])) {
            $books = explode(",", $this->register);
            foreach ($books as $book) {
                if (str_contains($book, $parts[1])) {
                    preg_match_all('/\d+/', $book, $matches);
                    $total = (int)$matches[0][0] - 1;
                    if ($total < 1){
                        $book = "";
                    } else {
                        $book = $parts[1] . " x" . $total;
                    }
                }
                if (!(strcmp($book,"") == 0))
                    $newBooks[] = $book;
            }
            if (!isArray($newBooks)){
                $this->register = " ";
            } else {
                $this->register = implode(",", $newBooks);
            }
            return $this->register;
        } else {
            return "El libro indicado no está en préstamo";
        }
    }

    public function emptyRegister() : String
    {
        $this->register = " ";
        return $this->register;
    }
}