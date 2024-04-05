<?php


class Body{
    private $head = 1;
    protected $arm = 2;
    protected $leg = 2;
    public $hand = 2;
    public $foot = 2;

    public function print_inside_attributes(){
        foreach($this as $key=> $value){
            print "$key : $value \n";
        }
    }

}

function print_object_atrributes($object){
    
    $object = array(1,2,3,4,5);
    $att = new Body($object);
    foreach($att as $key => $value){
        print "$key => $value \n";
    }
}



$body = new Body();
echo $body->print_inside_attributes();

print_object_atrributes($body);







?>