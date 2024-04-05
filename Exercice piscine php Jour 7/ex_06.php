<?php
class Pony{
    private $gender;
    private $name;
    private $color;

    public function __construct($gender, $name, $color)
    {
        $this->gender = $gender;
        $this->name = $name;
        $this->color = $color;
    }

    public function __destruct()
    {
        echo "I'm a dead pony. \n";
    }

    public function ponyPink()
    {
        echo "Don't worry, I'm a pony ! \n";
    }

    public function speak(){
        echo "Hiii hiii hiii \n";
    }
    public function __get($propriete)
        {   echo "Ce n'est pas bien de getter un attribut qui est prive !" ."\n";
            return $this->$propriete;
        }

    public function __set($propriete, $value){
        echo "Ce n'est pas bien de setter un attribut qui est privé ! \n" . 
        $this->$propriete = $value;
    }


}

$pony = new Pony("","","");
echo $pony->gender;
$pony->gender = "Male \n";
echo $pony->name;
$pony->name = "Foufou \n";
echo $pony->color;
$pony->color = "Blue \n";





?>