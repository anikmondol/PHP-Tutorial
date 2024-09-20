<?php

function test(){
    echo "test function called";
}


function main($fun){
    $fun();
}


$fun = 'test';

echo main($fun);

?>