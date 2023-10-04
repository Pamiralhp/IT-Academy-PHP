<?php
class Theater {
    private $name;
    private $city;
    private $movies = [];
    

    public function __construct($name, $city) {
        $this->name = $name;
        $this->city = $city;
    }
    public function getMovies(): array{
        return $this->movies;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getCity(): string {
        return $this->city;
    }
    public function addMovie($movie) {
        $this->movies[] = $movie;
    }

    public function getLongestMovie() {
        $LongestMovie = null;
        $longest = 0;

        foreach ($this->movies as $movie) {
            if ($movie->getLenght() > $longest) {
                $LongestMovie = $movie;
                $Longest = $movie->getLenght();
            }
        }

        return $LongestMovie;
    }
    public function showMovies() {
            echo "Cine: {$this->name}, Población: {$this->city}\n";
            foreach ($this->movies as $movie) {
                echo "Película: {$movie->getName()}, Duración: {$movie->getLength()} minutos, Director: {$movie->getDirector()}\n";
            }
            echo "\n";
    }

    public static function findDirector($directorName, $theaters) {
        $directorMovies = [];

        foreach ($theaters as $theater) {
            foreach ($theater->getMovies() as $movie) {
                if ($movie->getDirector() === $directorName) {
                    $directorMovies[] = $movie->getName();
                }
            }
        }

        return implode(", ", $directorMovies);
    }
}
?>