<?php


function my_age($age){
    if($age > 18){
        return " Je suis majeur \n";
    }else{
        return "Je suis mineur";
    }
}
echo my_age(19);


?>