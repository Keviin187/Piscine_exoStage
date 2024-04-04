<?php

function my_add_to_cookie($key, $value){

    $key = "pseudo";
    $value = "Max_";
    setcookie($key, $value, time()+ 3600);
   echo $key.$value."swag \n";

}
my_add_to_cookie('pseudo','Max_');


?>