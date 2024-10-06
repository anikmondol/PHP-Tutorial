<?php

function outer(){
    echo "outer function";
    echo "<br>";

    function inner(){
        echo "inner function";
    }

    inner();

}

outer();


// inner();

?>