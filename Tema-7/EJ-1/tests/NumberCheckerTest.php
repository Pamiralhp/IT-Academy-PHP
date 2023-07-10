<?php

include 'src\NumberChecker.php';
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{
    public function testIsEven(){

        $number = new NumberChecker(2);
        $number = new NumberChecker(9);
    
        $number->isEven();
        $this->assertTrue($number,'El numero es par');
        $this->assertFalse($number);
    }
    public function testIsPositive(){

        $number = new NumberChecker(1);
        $number = new NumberChecker(-7);
        
        $number->isPositive();
        $this->assertTrue($number, 'El numero es positivo');
        $this->assertFalse($number);
    }        
}


?>