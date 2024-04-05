<?php

abstract class Warrior{
    public function attack(){
        echo "I'll kill you, poor noob !!! \n";
    }

    abstract public function represent();
    abstract public function shout();

}

class Booba extends Warrior implements GoodManners{

        public function represent(){
            echo "92 \n";
        }
        public function shout(){
            echo "Bah bien Morray ! \n";
        }

        public function say_please()
        {
            echo "S'il-te-plait , ";
        }

        public function say_thank()
        {
            echo "Merci, ";
        }

        public function say_sorry($name)
        {
            ;
            echo "Milles excuses, ". $name;
        }

}


class LaFouine extends Warrior{

    public function represent(){
        echo "78 \n";
    }
    public function shout(){
        echo "Je suis proprietaire ! \n";
    }
}

interface GoodManners{
    public function say_please();
    public function say_thank();
    public function say_sorry($name);

    const END_WORDS = "dirais-je";

}

$booba = new Booba("");
echo $booba->say_please(). GoodManners::END_WORDS . "\n";
echo $booba->say_thank(). GoodManners::END_WORDS . "\n";
echo $booba->say_sorry('Kevin '). GoodManners::END_WORDS . "\n";



?>