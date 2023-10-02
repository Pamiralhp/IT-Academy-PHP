<?php
class Rectangle{
    private $length;
    private $width;

    public function __construct($length, $width, $area) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this ->length + $this->width;
    }

}
?>