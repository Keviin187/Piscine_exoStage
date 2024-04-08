<?php

namespace Impérium;

class Soldier{
    private $hp;
    private $attack;
    private $name;

    public function __construct($hp = 50, $attack = 12, $name)
    {
        $this->hp = $hp;
        $this->attack = $attack;
        $this->name = $name;
    }

    public function getHp(){

    }

    public function setHp(){

    }

    public function  getAttack(){

    }
    
    public function setAttack(){

    }

    public function doDamage($soldier){

    }

}


namespace Chaos;

class Soldier{
    private $hp;
    private $attack;
    private $name;

    public function __construct($hp = 70, $attack = 12, $name)
    {
        $this->hp = $hp;
        $this->attack = $attack;
        $this->name = $name;
    }

    public function getHp(){

    }

    public function setHp(){

    }

    public function  getAttack(){

    }
    
    public function setAttack(){
        
    }

    public function doDamage($soldier){

    }


}




?>