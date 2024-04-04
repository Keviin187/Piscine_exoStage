

<?php

class MyLittleAttributes {
    private $ville;
    private $fruit;

    public function __construct($ville, $fruit)
    {
        $this->ville = $ville;
        $this->fruit = $fruit;
    }

    public function setVille($ville){
        $this->ville = $ville;
    }

    public function setFruit($fruit){
        $this->fruit = $fruit;
    }

    public function getVille($ville){
        $this->ville = $ville;
    }

    public function getFruit($fruit){
        $this->fruit = $fruit;
    }

    public function display(){
        echo $this->ville . $this->fruit . "\n";
    }
}
$cdd = new MyLittleAttributes("Lamentin"," Quenette");
$cdd -> display();



?>