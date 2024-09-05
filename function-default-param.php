<?php

// function fruit($name="banana", $color="green") {
//     return "The Fruit name is $name. and color is $color";
// }

// echo fruit("apple", "red");


function display_user($name, $color="green") {
    return "<h1 style='color:$color'>$name</h1>";
}

echo display_user("anik");


?>