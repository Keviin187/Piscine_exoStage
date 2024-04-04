<?php
$arr = array(35, 'kevin', 'colombes');
$key = 1;

function array_key($arr, $key){
    foreach($arr as $key => $value){
        echo $key;
    }
    
}
array_key($arr, $key);

?>

