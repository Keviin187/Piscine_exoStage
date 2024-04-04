<?php

function my_create_file($string){
    try{
      fopen("$string.txt", "w");
        return true;
    }catch(Exception $error){
        echo $error;
        return false;
    }
    


}

my_create_file('');


?>