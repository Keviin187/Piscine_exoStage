<?php

abstract class Warrior{
    public function attack(){
        echo "I'll kill you, poor noob !!! \n";
    }

    abstract public function represent();
    abstract public function shout();

}

class Booba extends Warrior{

        public function represent(){
            echo "92 \n";
        }
        public function shout(){
            echo "Bah bien Morray ! \n";
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

$booba = new Booba('');
echo $booba->represent();
echo $booba->shout();

$lafouine = new LaFouine('');
echo $lafouine->represent();
echo $lafouine->shout();

?>