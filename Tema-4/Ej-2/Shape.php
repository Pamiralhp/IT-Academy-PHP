<?php
class Shape 
{
    public $base;
    public $height;

    public  function __construct($height, $base)
    {
        $this-> height = $height;
        $this-> base = $base;
    }

    public  function print($area)
    {
        echo "El area es de $area <br>";
    }
}


?>