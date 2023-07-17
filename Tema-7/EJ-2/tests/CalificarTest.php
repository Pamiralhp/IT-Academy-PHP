<?php

include 'src\Calificar.php';
use PHPUnit\Framework\TestCase;
final class CalificarTest extends TestCase{
    public function testCalificar(){
        $nota = null;
        $grade = new Calificar($nota);
        $grade1 = new Calificar($nota);
        $grade2= new Calificar($nota);
        $grade3 = new Calificar($nota);
        
        
        $this->assertEquals($grade->Calificar(20),"Reprobado");
        $this->assertSame($grade1->Calificar(33),"Tercera Division");
        $this->assertSame($grade2->Calificar(45),"Segunda Division");
        $this->assertSame($grade3->Calificar(60),"Primera Division");
    }
}


?>