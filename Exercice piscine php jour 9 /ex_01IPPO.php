<?php

class Ippo{
    public $name;
    public $strengh;
    public $defense;
    public $stamina;
    public $speed;
    public $smash;
    public $uppercut;
    public $gazelle_punch;
    public $dempsey_roll;


    public function __construct($name, $strengh, $defense, $stamina, $speed, $smash, $uppercut, $gazelle_punch, $dempsey_roll){
        $this->name = $name;
        $this->strengh = $strengh;
        $this->defense = $defense;
        $this->stamina = $stamina;
        $this->speed = $speed;
    }    

    public function setName($name){
        $this->name =$name;
    }
    public function getName(){
        return $this->name;
    }
    public function setStrengh($strengh){
        $this->strengh =$strengh;
    }
    public function getStrengh(){
        return $this->strengh;
    }
    public function setDefense($defense){
        $this->defense = $defense;
    }
    public function getDefense(){
        return $this->defense;
    }
    public function setStamina($stamina){
        $this->stamina = $stamina;
    }
    public function getStamina(){
        return $this->stamina;
    }
    public function setSpeed($speed){
        $this->speed = $speed;
    }
    public function getSpeed(){
        return $this->speed;
    }

    public function setSmash($smash){
        $this->smash = $smash;
    }
    public function getSmash(){
        return $this->smash;
    }
    public function setUppercut($uppercut){
        $this->uppercut = $uppercut;
    }
    public function getUppercut(){
        return $this->uppercut;
    }
    public function setGazelle_punch($gazelle_punch){
        $this->gazelle_punch = $gazelle_punch;
    }
    public function getGazelle_punch(){
        return $this->gazelle_punch;
    }
    public function setDempsey_roll($dempsey_roll){
        $this->dempsey_roll = $dempsey_roll;
    }
    public function getDempsey_roll(){
        return $this->dempsey_roll;
    }

}

$ippo = new Ippo("Ippo",1403,867,24329,178,1403,1433,1423,1453);
echo $ippo->getName(). "\n";
echo $ippo->getStrengh()."\n";
echo $ippo->getDefense()."\n";
echo $ippo->getStamina()."\n";
echo $ippo->getSpeed()."\n";



?>


