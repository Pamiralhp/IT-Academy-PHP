<?php
include 'src\.php';

use PHPUnit\Framework\TestCase;
class GradeCategoryTest extends TestCase{
    public function testCategory()
    {
        $student = new GradeCategory();
        $this->assertSame("First Division", $student->category(60)); //same data type and value
        $this->assertSame("Second Division", $student->category(45));
        $this->assertSame("Third Division", $student->category(33));
        $this->assertSame("The student failed", $student->category(20));
    }
}

?>