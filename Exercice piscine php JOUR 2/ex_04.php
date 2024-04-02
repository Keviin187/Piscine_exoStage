<?php

function print_until($max){
    if($max < 0){
        echo 'NUNUCHE';
        return false;
    }

   $i= 0;
    while($i <= $max){
        echo ($i)."\n";
        $i++;
    }
    return true;


    
}
print_until(3);



?>