
<?php

class MyLittleAttribute{
    public $name;

    function __construct($name){
        echo $this->name = $name . "\n";
    }
    function display(){
        return $this->name;
    }
    
        
    }

$attr = new MyLittleAttribute("Kevin");
$attr->display(); 




?>