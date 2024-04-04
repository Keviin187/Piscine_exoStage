<?php

class Personnage{

protected $name;
protected $life;
protected $agility;
protected $strengh;
protected $wit;

const CLASSE = "Personnage";

public function __construct($name)
{
    $this->name=$name;
    $this->life = 50;
    $this->agility = 2;
    $this->strengh = 2;
    $this->wit = 2;
}

public function getName(){
    return $this->name;
}

public function getLife(){
    return $this->life;
}

public function getAgility(){
    return $this->agility;
}

public function getStrengh(){
    return $this->strengh;
}

public function getWit(){
    return $this->wit;
}

public function getClasse(){
    return self::CLASSE;
}


}

$perso = new Personnage("Ronaldo R9");
echo $perso->getName()."\n";
echo $perso->getLife()."\n";
echo $perso->getAgility()."\n";
echo $perso->getStrengh()."\n";
echo $perso->getWit()."\n";
/* echo Personnage::CLASSE . "\n";  */
echo $perso->getClasse()."\n";



?>

