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
        echo "<h2>Cine: {$this->name}, Población: {$this->city}</h2>";
        echo "<ul class='movie-list'>";
    
        foreach ($this->movies as $movie) {
            $movieName = $movie->getName();
            $movieLength = $movie->getLength();
            $movieDirector = $movie->getDirector();
    
            echo "<li class='list'>";
            echo "<strong>Películas:</strong> $movieName, <strong>Duración:</strong> $movieLength minutos, <strong>Director:</strong> $movieDirector";
            echo "</li>";
        }
    
        echo "</ul>";
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