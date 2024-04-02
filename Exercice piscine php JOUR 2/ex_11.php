<?php

function include_file($filename){
$filename = file_get_contents('http://www.footmercato.com');
echo $filename;
}
include_file('');



?>