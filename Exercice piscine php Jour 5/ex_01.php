<?php

/* 
Première consigne :

function my_longer($str1, $str2){

    if(is_string($str1) && is_string($str2)){
        echo '1';
    }else{
        echo '-1';
    }
}
my_longer("Kevin", "Colombes"); */

// Deuxieme consigne :

function my_longer($str1, $str2){
    if(strlen($str1) > strlen($str2)){
        return $str1;
    }elseif(strlen($str2)< strlen($str1)){
        return $str2;
    }elseif(strlen($str2) == strlen($str1)){
        return $str1;
    }else{
        return 'NOTHING';
    }

}

echo my_longer('Hola me llamo Kevino', 'Bom dia');
?>


