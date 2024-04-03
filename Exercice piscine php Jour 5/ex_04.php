


<?php

function clear_and_replace($string, $word){
    /* $string = "         La vie est belle        "; */
    $string = trim($string);  
    echo $string . "\n"; 

    $word = "bonjour bonjour bonjour bonjour";
    echo preg_replace('/bonjour/', 'Pangolin', $word, 3);

}

clear_and_replace("         La vie est belle        ","");



?>