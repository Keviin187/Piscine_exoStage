<?php

function call_pangolin(){

try{
    throw new Exception("This is an exception \n");
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
call_pangolin();
call_pangolin();
call_pangolin();
call_pangolin();
call_pangolin();

?>







<!-- Dans cet exercice vous devrez appeler 5 fois la fonction “call_pangolin” (qui ne prend aucun 
paramètre). Vous devrez faire attention à catch les erreurs si jamais elles sont “throw” par la fonction 
“call_pangolin” et à les afficher avec la méthode de la classe Exception “getMessage()”. -->