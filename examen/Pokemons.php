<!-- registrar datos de pokemons 
nombre 
tipo = fuego agua electrico tierra 
id peso altura 4 ataques 
registrar 6 pokemons 

muestre los tipo fuego
listado de ataques  -->
<?php
class Pokemon{
    private $id;
    private $weith;
    private $height;
    private $name;
    private $Type;
    private $HP;

    public function __construct($id, $weith, $height, $name, $Type, $hp){
        $this->id = $id;
        $this->weith = $weith;
        $this->height = $height;
        $this->name = $name;
        $this->Type = $Type;
        $this->hp = $hp;
        $this->attacks = array();
}
public function getName (){
    return $this->name;
}
public function getType (){
    return $this->Type;
}
public function getHp (){
    return $this->hp;
}
public function getAttacks (){
    return $this->attacks;
}
public function setHp($hp){
    $this->hp = $hp;
}
public function addAttack($attack) {
    $this->attacks[] = $attack;
}


public function attack($enemy) {
    $enemy->setHp($enemy->getHp() - 2);
return $this->name . " atacaste a tu enemigo " . $enemy->name . " Su salud es de " . $enemy->hp . " hp \n";
}


public function ataques() : array{
    $ataques = [];
    foreach ($this->attacks as $ataque) {
        $ataques[] = $ataque;
    }echo $this->getName() . " Estos son sus ataques ";
    return $ataques;
    }
}
?>