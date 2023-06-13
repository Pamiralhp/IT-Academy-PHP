<?php
//Ejercicio-1
// $txt = "Hello world!";
// $x = 5;
// $y = 10.5;
// $TF = true;
// const NAME = "Pavel";
// echo $txt;
// echo "<br>" . $x;
// echo "<br>" . $y;
// echo "<br>" . $TF;
// echo "<br>" . NAME;

$upperCase = strtoupper($txt);
echo "<br>" . $upperCase . "<br>";

$length = strlen($txt);
echo $length . "<br>";

$reversed = strrev($txt);
echo $reversed . "<br>";

$text2 = "Este es el curso de PHP";
$concatxt = $txt . " " . $text2;
echo $concatxt . "<br>";
?>