<?php

// $name = "anik";

// function getName(){
    
//     global $name;

//     echo $name;

// }

//  echo $name;
//  echo "<br>";

// getName();


$name = "anik";

function outerFun(){
    $name = "joy";
    echo $name;

    function innerFun(){
        // $name = "roy";
        global $name;
        $name = "tumei";
        echo $name;
    }

}

echo "global Name: $name";
echo "<br>";
outerFun();
echo "<br>";
innerFun();


?>