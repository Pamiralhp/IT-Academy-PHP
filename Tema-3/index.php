<?php
echo "<h2>". "Ejercicio-1"."</h2>";

$numeros = [1 , 2 , 3  , 4 , 5];
foreach ($numeros as $key) {
    echo $key . "<br>";
}

echo "<h2>". "Ejercicio-2"."</h2>";

$X = array(10, 20, 30, 40, 50, 60);

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

?>