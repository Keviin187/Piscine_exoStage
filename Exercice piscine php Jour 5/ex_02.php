<?php

function my_rounds($nb){
    round($nb, $precision = 0 , $mode = PHP_ROUND_HALF_UP);

    var_dump(round(16.6, 0, PHP_ROUND_HALF_UP));


}

my_rounds($nb);

?>



<!-- Écrire une fonction qui affiche : "Results : [arr1] - [arr2] - [arr3]\n". - "[arr1]" devra être remplacé par l’arrondi de "nb" à l’entier le plus proche. - "[arr2]" devra être remplacé par l’arrondi de "nb" à l’entier supérieur. - "[arr3]" devra être remplacé par l’arrondi de "nb" à l’entier inférieur.   

Prototype : void my_rounds(float $nb);  -->  
