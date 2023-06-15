<?php
echo "<h2>". "Ejercicio-1"."</h2>";

$numeros = [1 , 2 , 3  , 4 , 5];
foreach ($numeros as $key) {
    echo $key . "<br>";
}

echo "<hr><h2>". "Ejercicio-2"."</h2>";

$X = [10, 20, 30, 40, 50, 60];

print_r("<pre>");
print_r($X);
print_r("</pre>");
echo "Tamaño del array original: " . count($X) . "<br>";

unset($X[2]);

$X = array_values($X);
print_r("<pre>");
print_r($X);
print_r("</pre>");
echo "Tamaño del array eliminando elemento: " . count($X) . "<br>";

echo "<hr><h2>". "Ejercicio-3"."</h2>";

function letterFind ($arrayWords, $letter){
    foreach ($arrayWords as $words) {
        if (stripos($words, $letter) === false) {
            return false;
        }
        
    }
        return true;
}
$arrayWords = ["Hola", "Php", "Html", "Phyton"];
$letter = "h";
$letter1 = "o";

var_dump(letterFind($arrayWords,$letter));
var_dump(letterFind($arrayWords,$letter1));

echo "<hr><h2>". "Ejercicio-4"."</h2>";

$sobreMi =[
    'Nombre' => 'Pavel',
    'Edad' => 26,
    'Email' => 'pamiralhp@gmail.com',
    'Comida favorita' => 'Mangu'
];
var_dump($sobreMi);
?>