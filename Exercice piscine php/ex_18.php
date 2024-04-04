<?php

function get_args($array){
    $array =  array(35, 'kevin', 'colombes','dev web');
    return print_r($array);
}
get_args('');




function get_last_arg(){
    $array =  array(35, 'kevin', 'colombes','dev web');
    return print_r(end($array));
}
get_last_arg('');
?>


