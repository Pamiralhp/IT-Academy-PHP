<!-- registrar datos de pokemons 
nombre 
tipo = fuego agua electrico tierra 
id peso altura 4 ataques 
registrar 6 pokemons 

muestre los tipo fuego
listado de ataques  -->

<!-- $name , $Type, $id, $peso, $altura){ -->

<?php
include_once "./Pokemons.php";
include_once "./Type.php";
include_once "./Team.php";

// instanciar pokemons y los ataques
$pikachu = new Pokemon(1,1,1,"Pikachu", "Electric", 10);
$pikachu->addAttack("Thunder Shock");
$pikachu->addAttack("Quick Attack");
$pikachu->addAttack("Electro Ball");
$pikachu->addAttack("Iron Tail");

$bulbasor = new Pokemon(2,2,2,"Bulbasaur", "Grass", 18);
$bulbasor->addAttack("Vine Whip");
$bulbasor->addAttack("Razor Leaf");
$bulbasor->addAttack("Solar Beam");
$bulbasor->addAttack("Seed Bomb");

$charmander = new Pokemon(3,3,3,"Charmander", "Fire", 20);
$charmander->addAttack("Ember");
$charmander->addAttack("Flame Burst");
$charmander->addAttack("Fire Spin");
$charmander->addAttack("Inferno");

$eve = new Pokemon(4,4,4,"Eve", "Electric", 25);
$eve->addAttack("Quick Attack");
$eve->addAttack("Swift");
$eve->addAttack("Electro Ball");
$eve->addAttack("Thunderbolt");

$charizard = new Pokemon(5,5,5,"Charizard", "Fire", 30);
$charizard->addAttack("Flamethrower");
$charizard->addAttack("Fire Spin");
$charizard->addAttack("Inferno");
$charizard->addAttack("Heat Wave");

$squirtle = new Pokemon(6,6,6,"Squirtle", "Water", 15);
$squirtle->addAttack("Tackle");
$squirtle->addAttack("Water Gun");
$squirtle->addAttack("Bubble");
$squirtle->addAttack("Bite");


// instanciar equipos y agregar pokemons a los equipo
$equipo1 = new Team();
$equipo1->addPokemon($pikachu);
$equipo1->addPokemon($bulbasor);
$equipo1->addPokemon($eve);

$equipo2 = new Team();
$equipo2->addPokemon($charmander);
$equipo2->addPokemon($charizard);
$equipo2->addPokemon($squirtle);


// Realizar ataques entre los Pokémon
echo $pikachu->attack($bulbasor)."\n";
echo $charmander->attack($pikachu)."\n";
echo $bulbasor->attack($charmander)."\n";
echo $pikachu->attack($eve)."\n";


// Mostrar los tipo fuego y los ataques con la funcion ataques

echo implode(", ", $pikachu->ataques())."\n \n";
echo implode(", ", $equipo2->showType("Fire"))."\n";

?>