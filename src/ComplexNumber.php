<?php

namespace App;

class ComplexNumber
{
    private $real;

    private $imaginary;

    public function __construct(float $real, float $imaginary)
    {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }
    
    public function getReal(): float
    {
        return $this->real;
    }
 
    public function getImaginary(): float
    {
        return $this->imaginary;
    }

    private function sign(): string
    {
        return $this->imaginary > 0 ? '+' : '-';
    }

    public function __toString()
    {
        $text = '';

        if ($this->imaginary == 1 || $this->imaginary == -1) {
            $text = ($this->real == 0 ? $this->sign() : $this->real . $this->sign()) . 'i';
        } else {
            $text = $this->real . $this->sign() . abs($this->imaginary) . "i";
        }
        return $text;
    }
}