<?php


function is_same($a, $b){
   
    if($a == $b){
        echo "Same value \n";
    }
    elseif($a === $b){
        echo "Same type \n";
    }
/*     else{
        echo "Same type and value \n";
    } */
}
is_same();


?>