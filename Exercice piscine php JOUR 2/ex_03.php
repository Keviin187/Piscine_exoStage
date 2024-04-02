<?php


function print_age($age){
    if($age <= 0){
        echo "Enfantillage...";
    }elseif($age==42){
        echo "I'm the best";
    }else{
        echo "Mon age est cool";
    }
}
print_age(35);


?>