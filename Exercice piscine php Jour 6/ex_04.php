

<?php

class MyCalculator{
    private $a;
    private $b;
    private $result;

    public function __construct($a, $b){
        $this-> a = $a;
        $this-> b = $b;
        $this->result;
    }

    public function setA($a){
        $this-> a = $a;
    }
    public function getA(){
        return $this->a;
    }

    public function setB($b){
        $this-> b = $b;
    }
    public function getB(){
        return $this->b;
    }

/*     public function setResult($result){
        $this -> result = $result;
    } */
    public function getResult(){
        return $this->result;
    }

    public function addition() {
        $this->result = $this->a + $this->b;
        return $this->result;
    }

    public function subtraction() {
        $this->result = $this->a - $this->b;
        return $this->result;
    }

    public function multiplication() {
        $this->result = $this->a * $this->b;
        return $this->result;
    }

    public function divide() {
        $this->result = $this->a / $this->b;
        return $this->result;
    }
    public function getLastResult(){
        return $this->result;
    }


}

$calcul = new MyCalculator(35, 38);
echo $calcul->addition()."\n";
echo $calcul->subtraction()."\n";
echo $calcul->multiplication()."\n";
echo $calcul->divide()."\n";
echo $calcul->getLastResult()."\n";



?>