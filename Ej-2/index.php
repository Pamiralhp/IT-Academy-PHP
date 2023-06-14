<?php

define('STDIN',fopen("php://stdin","r"));
echo "<h2>"."Ejercicio-1"."</h2>";
$txt = "Hello world!";
$x = 5;
$y = 10.5;
$TF = true;
const NAME = "Pavel";
echo $txt;
echo "<br>" . $x;
echo "<br>" . $y;
echo "<br>" . $TF;
echo "<br>" . NAME . "<hr>";

echo "<h2>"."Ejercicio-2"."</h2>";

$txt = "Hello world!";

$upperCase = strtoupper($txt);
echo "<br>" . $upperCase . "<br>";

$length = strlen($txt);
echo $length . "<br>";

$reversed = strrev($txt);
echo $reversed . "<br>";

$text2 = "Este es el curso de PHP";
$concatxt = $txt . " " . $text2;
echo $concatxt  . "<hr>";

echo "<h2>"."Ejercicio-3"."</h2>";

$x = 5;
$y = 3;
$a = 7.5;
$b = 10.5;

echo "Valor de X = " . $x . "<br>" .
"Valor de Y = " . $y . "<br>" . 
"Valor de A = " . $a . "<br>" . 
"Valor de B = " . $b . "<hr>";

echo "X + Y = " . $x + $y . "<br>";
echo "X - Y = " . $x - $y . "<br>";
echo "X x Y = " . $x * $y . "<br>";
echo "X % Y = ". $x % $y  . "<br>" . "<hr>";

echo "A + B = ". $a + $b . "<br>";
echo "A - B = ". $a - $b . "<br>";
echo "A x B = ". $a * $b . "<br>";
echo "A % B = ". $a % $b . "<br>" . "<hr>";



echo "Doable de X = " . (2 * $x). "<br>" .
 "Doable de Y = " . (2 * $y). "<br>" . 
 "Doable de A = " . (2 * $a). "<br>" . 
 "Doable de B = " . (2 * $b). "<br>";
echo "Suma de todas las variables = " . ($x + $y) + ($a + $b). "<br>";
echo "Modulo de todas las variables = " . $x % $y % $a % $b. "<hr>";

echo "<h2>"."Calculadora"."</h2>";


function calculator($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Cannot divide by zero";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Error: Invalid operator";
    }
}

$result = calculator(23, 12,"+");
echo "Resultado: " . $result ;

echo "<hr><h2>". "Ejercicio-4"."</h2>";

function contardor($n, $paso) {
    for ($i=0; $i <= $n ; $i += $paso) { 

        echo $i . "<br>";
    }    
}
contardor(20, 2);

echo "<hr><h2>". "Ejercicio-5"."</h2>";

function calificaciones($nota) {
    if ($nota >= 60){
        echo "Primera Division";
    }
    elseif($nota >= 45){
        echo "Segunda Division";
    }
    elseif ($nota >= 33){
        echo "Tercera Division";
    }
    else{
        echo "Reprobado";
    }
}
calificaciones(80);
?>