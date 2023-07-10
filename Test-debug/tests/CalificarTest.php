<?php

include 'src\Calificar.php';
use PHPUnit\Framework\TestCase;
final class CalificarTest extends TestCase{
    public function testCalificar(){
        $grade1 = new Calificar(33);
        $grade2= new Calificar(45);
        $grade3 = new Calificar(60);
        

        $grade1 = $grade1->Calificar(70);

        $this->assertSame("Tercera División", $grade1);
        $this->assertSame("Segunda División", $grade2);
        $this->assertSame("Primera División", $grade3);
    }
}


?>