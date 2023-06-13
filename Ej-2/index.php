<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
$TF = true;
const NAME = "Pavel";
echo $txt;
echo "<br>" . $x;
echo "<br>" . $y;
echo "<br>" . $TF;
echo "<br>" . NAME;

$upperString = strtoupper($txt);
echo $upperString . "<br>";

$stringLength = strlen($txt);
echo $stringLength . "<br>";

$reversedString = strrev($txt);
echo $reversedString . "<br>";

$newString = "Este es el curso de PHP";
$concatenatedString = $txt . " " . $newString;
echo $concatenatedString . "<br>";
?>