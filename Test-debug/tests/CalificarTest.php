<?php

include 'src\Calificar.php';
use PHPUnit\Framework\TestCase;
final class CalificarTest extends TestCase{
    public function testCalificar(){
        $grade = new Calificar();
        
        
        $this->assertEquals($grade->Calificar(20),"Reprobado");
        $this->assertSame($grade->Calificar(33),"Tercera Division");
        $this->assertSame($grade->Calificar(45),"Segunda Division");
        $this->assertSame($grade->Calificar(60),"Primera Division");
    }
}


?>