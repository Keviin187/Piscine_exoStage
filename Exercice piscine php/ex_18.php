<?php

function get_args($array){
    $array =  array(35, 'kevin', 'colombes','dev web');
    print_r($array);
}
echo get_args('');




function get_last_arg(){
    $array =  array(35, 'kevin', 'colombes','dev web');
    print_r(end($array));
}
echo get_last_arg('');
?>


//manque les return 