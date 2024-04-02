<?php

function my_name($user){
    if($user){
        return"My name is $user \n";
    }else{
        return "My name is Pangolin";
    }
    

}
echo my_name('Kevin');
//echo my_name();


?>