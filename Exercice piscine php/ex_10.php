

<?php

function return_calls(){
    static $nb_calls = 0;
    $nb_calls++;
    return $nb_calls;
}

echo return_calls()."\n";
echo return_calls()."\n";
echo return_calls()."\n";

?>