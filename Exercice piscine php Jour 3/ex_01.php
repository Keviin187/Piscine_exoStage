<?php

$a = "hello";
$b= "world";
$c = "le";
$d = "monde";
$e = "n'est";
$f= "que";
$g = "PHP";

function declare_globals(){
    global $a;
    echo $a. "\n";
}
declare_globals();


?>