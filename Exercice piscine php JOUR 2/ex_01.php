<?php

function print_positive($positive){
    if($positive > 0){
        return $positive ."\n";
    }else{
        return "aucun résultat";

    }
}
echo print_positive(35);


?>