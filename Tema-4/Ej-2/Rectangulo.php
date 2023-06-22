<?php
class Rectangulo extends Shape
{
    public function area()
    {
        return $this->height * $this->base;
    }
}

?>