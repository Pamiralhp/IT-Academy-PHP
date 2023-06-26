<?php
require "Sound.php";
class Dog implements Sound {
    private $name;
    public function makeSound(){
        return "Guau, Guau!";
    }
}
class Cat implements Sound {
    public $name;
    public function makeSound(){
        return "Miau, Miau";
    }
}

?>