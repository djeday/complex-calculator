<?php

namespace App;

class Calculator
{
    public static function sum(ComplexNumber $cn1, ComplexNumber $cn2): ComplexNumber
    {
        return new ComplexNumber(
            $cn1->getReal() + $cn2->getReal(), 
            $cn1->getImaginary() + $cn2->getImaginary()
        );
    }

    public static function multiply(ComplexNumber $cn1, ComplexNumber $cn2): ComplexNumber
    {
        return new ComplexNumber(
            $cn1->getReal() * $cn2->getReal() - $cn1->getImaginary() * $cn2->getImaginary(),
            $cn1->getReal() * $cn2->getImaginary() + $cn1->getImaginary() * $cn2->getReal()
        );
    }

    public static function substract(ComplexNumber $cn1, ComplexNumber $cn2): ComplexNumber
    {
        return new ComplexNumber(
            $cn1->getReal() - $cn2->getReal(), 
            $cn1->getImaginary() - $cn2->getImaginary()
        );
    }

    public static function divide(ComplexNumber $cn1, ComplexNumber $cn2): ComplexNumber  
    {
        $tempNumber = self::multiply(
            $cn1,
            new ComplexNumber(
                $cn2->getReal(),
                (-1) * $cn2->getImaginary()
            )
        );
        $denominator = $cn2->getReal() * $cn2->getReal() + $cn2->getImaginary() * $cn2->getImaginary();
        
        return new ComplexNumber($tempNumber->getReal() / $denominator, $tempNumber->getImaginary() / $denominator);
    }
}

?>