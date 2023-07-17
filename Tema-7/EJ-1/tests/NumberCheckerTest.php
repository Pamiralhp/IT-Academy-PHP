<?php

include 'src\NumberChecker.php';
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{
    public function testIsEven(){

        $number = new NumberChecker(2);
        $number1 = new NumberChecker(9);

        $this->assertTrue($number->isEven());
        $this->assertFalse($number1->isEven());
    }
    public function testIsPositive(){

        $number = new NumberChecker(1);
        $this->assertTrue($number->isPositive());
    }        
}


?>