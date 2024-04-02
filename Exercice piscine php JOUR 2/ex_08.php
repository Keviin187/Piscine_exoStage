<?php


function print_array_with_key($my_array){
    $my_array = [
        '35',
        '92700',
        'Colombes',
        'Hauts de seine',
    ];
    foreach ($my_array as $cle => $valeur){
        echo "clé " . $cle . " : " . $valeur . "\n";
    }
}
print_array_with_key('');



?>