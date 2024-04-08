<?php 



interface Icars{

    public function getPrice();
    public function getWeight();
    public function mineIsBigger($obj);
}

class BMW implements Icars{

    private $_price;
    private $_weight;
    
    public function __construct($_price, $_weight = 4242)
    {
        $this->_price = $_price;
        $this->_weight = $_weight;

    }
    public function getPrice()
    {
        
        return $this->_price;
    }
    public function getWeight()
    {
        return $this->_weight;
    }

    public function mineIsBigger($obj)
    {
        if($obj instanceof Toyota){
            return "Mine is bigger" ."\n";
        }elseif($obj instanceof Smart){
            return "Mine is way bigger" ."\n";
        }elseif($obj instanceof Velib){
            return "LOL" ."\n";
        }else{
            return "Show me" ."\n";
        }
    }
    public static function lessExpensive(){
        return 15000 ."\n";
    }
}
class Suzuki implements Icars{

    private $_price;
    private $_weight;

    public function __construct($_price, $_weight = 4242)
    {
        $this->_price = $_price;
        $this->_weight = $_weight;

    }

    public function getPrice()
    {
    
        return $this->_price;
    }
    public function getWeight()
    {
        return $this->_weight;

    }
    public function mineIsBigger($obj)
    {
        if($obj instanceof Toyota){
            return "Mine is bigger" ."\n";
        }elseif($obj instanceof Smart){
            return "Mine is way bigger" ."\n";
        }elseif($obj instanceof Velib){
            return "LOL" ."\n";
        }else{
            return "Show me" ."\n";
        }
    }
    public static function lessExpensive(){
        return 5000 ."\n";
    }
}
class Toyota{}
class Smart{}
class Velib{}

$bmw = new BMW(222);
echo $bmw->getPrice() ."\n";
echo $bmw->getWeight() ."\n";
echo $bmw->mineIsBigger(new Toyota());
echo $bmw->mineIsBigger(new Smart());
echo $bmw->mineIsBigger(new Velib());

$suzuki = new Suzuki(456);
echo $suzuki->getPrice() ."\n";
echo $suzuki->getWeight() ."\n";
echo $suzuki->mineIsBigger(new Toyota());
echo $suzuki->mineIsBigger(new Smart());
echo $suzuki->mineIsBigger(new Velib());
echo "voiture la moins chere " . BMW::lessExpensive();
echo "voiture la moins chere " . Suzuki::lessExpensive();

?>