<?php

$me = "Kevin";
$me1 = "Henry";
$me2 = "35";
$me3 = array(92700, "Colombes", "Hauts de seine");

function my_aff_global(){
    foreach($GLOBALS as $name => $value)
    {if(!is_array($value)){
        echo "[$name] => [$value] \n";

    }}
}
my_aff_global();
?>