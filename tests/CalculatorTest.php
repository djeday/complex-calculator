<?php

namespace App\Test;

use App\Calculator; 
use App\ComplexNumber;

class CalculatorTest extends \PHPUnit\Framework\TestCase {

    /**
     * @dataProvider additionWithValidResultProvider
     */
    public function testDivideOperationValidResult(ComplexNumber $z1, ComplexNumber $z2) {
        $divide = (string)Calculator::divide($z1, $z2);
        self::assertSame($divide, '0.8-1.4i');
    }
    /**
     * @dataProvider additionWithValidResultProvider
     */
    public function testSumOperationValidResult(ComplexNumber $z1, ComplexNumber $z2) {
        $sum = (string)Calculator::sum($z1, $z2);
        self::assertSame($sum, '1+5i');
    }
    /**
     * @dataProvider additionWithValidResultProvider
     */
    public function testSubstractOperationValidResult(ComplexNumber $z1, ComplexNumber $z2) {
        $substract = (string)Calculator::substract($z1, $z2);
        self::assertSame($substract, '3+i');
    }
    /**
     * @dataProvider additionWithValidResultProvider
     */
    public function testMultiplyOperationValidResult(ComplexNumber $z1, ComplexNumber $z2) {
        $multiply = (string)Calculator::multiply($z1, $z2);
        self::assertSame($multiply, '-8+i');
    }

    public function additionWithValidResultProvider() {
        return [
            [
                new ComplexNumber(2, 3),
                new ComplexNumber(-1, 2)
            ]
        ];
    }
}