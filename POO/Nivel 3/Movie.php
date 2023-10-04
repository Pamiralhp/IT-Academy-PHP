<?php
final class Movie {
    private $name;
    private $length;
    private $director;

    function __construct($name, $length, $director) {
        $this->name = $name;
        $this->length = $length;
        $this->director = $director;
    }

    public function getName()
    {
        return $this -> name;
    }

    public function getDirector()
    {
        return $this->director;
    }
    
    public function getLength()
    {
        return $this->length;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }
    
    public function setLength($length)
    {
        $this->length = $length;
    }
}

?>