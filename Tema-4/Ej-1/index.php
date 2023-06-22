<?php

require 'Employee.php';

$emp1 = new Employee();
$emp1->initialize("Pavel", 1900);
$emp1->print();

$emp2 = new Employee();
$emp2->initialize("Albert", 8000);
$emp2->print();

?>