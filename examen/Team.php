<?php
class Team{
    private array $myTeam;

    public function __construct(){
        $this->myTeam = array();
    }

    public function addPokemon($pokemon){
        $this->myTeam[] = $pokemon;
    }

    public function getPokemonNames() {
        $names = array();
        foreach ($this->myTeam as $pokemon) {
            $names[] = $pokemon->getName();
        }
        return $names;
    }

    public function showType($tipo) {
        $tipos = array();
        foreach ($this->myTeam as $pokemon) {
            if ($pokemon->getType() === $tipo) {
                $pokemonName = $pokemon->getName();
                $tipos[] = $pokemonName;
            }
        }echo "estos son tus pokemons de tipo " . $tipo . ": ";
        return $tipos;
    }
} 
?>