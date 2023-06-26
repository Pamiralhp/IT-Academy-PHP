<?php
require 'Animals.php';

$felix = new Cat;
$felix->name = "Felix";
$Scooby = new Dog;
$Scooby->name = "Scooby-Doo";

echo "Soy ".$felix->name." el gato y hago, " .$felix->makeSound();
echo "<br>Soy ".$Scooby->name." y hago, " .$Scooby->makeSound();
?>