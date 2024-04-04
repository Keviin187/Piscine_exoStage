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

class Warrior extends Personnage{
    
    const CLASSE = "Warrior";

    public function __construct($name)
    {
        $this->name=$name;
        $this->life = 100;
        $this->agility = 8;
        $this->strengh = 10;
        $this->wit = 3;
        echo $this->name.": I'll engrave my name in history ! \n";
    }

    public function attack(){
        return $this->name.": I'll crush you with my hammer ! \n"; 
    }

    public function __destruct() {
        echo $this->name . ": Aarrg I can't believe I'm dead... \n";
    }
}


class Mage extends Personnage{
    const CLASSE = "Mage";

    public function __construct($name)
    {
        $this->name=$name;
        $this->life = 70;
        $this->agility = 10;
        $this->strengh = 3;
        $this->wit = 10;
        echo $this->name.": May the gods be with me. \n";

    }

    public function attack(){
        return $this->name.": Fell the power of my magic ! \n";
    }

    public function __destruct() {
        echo $this->name . ": By the four gods, I passed away...\n";
    }

}

$warrior = new Warrior("Ronaldo");
echo $warrior->attack();
$mage = new Mage("Zidane");
echo $mage->attack();






















/* $perso = new Personnage("Ronaldo R9");
echo $perso->getName()."\n";
echo $perso->getLife()."\n";
echo $perso->getAgility()."\n";
echo $perso->getStrengh()."\n";
echo $perso->getWit()."\n";
/* echo Personnage::CLASSE . "\n";  */
/*echo $perso->getClasse()."\n"; */



?>