<?php
require 'Shape.php';
require 'Triangulo.php';
require 'Rectangulo.php';

$triangle1 = new Triangulo(43, 10);
$triangle1->print($triangle1->area());
echo 'El area es = '. $triangle1->area(). '<br>';

$rectangle1 = new Rectangulo(10, 100);
$rectangle1->print($rectangle1->area());
echo 'El area es ='. $rectangle1->area();
?>