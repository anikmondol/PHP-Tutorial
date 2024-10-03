<?php

function test(){
    echo "test function called";
}

$test =  "test";

// $test();

function main($a){
    $a();
}

main($test);


?>