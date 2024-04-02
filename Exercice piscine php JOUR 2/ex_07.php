<?php

function print_array($my_array){
    $my_array = [
        '35',
        '97200',
        'Colombes',
        'Hauts de seine',
    ];
    foreach ($my_array as $valeur){
        echo($valeur . "\n");
    }
}
print_array('');

?>