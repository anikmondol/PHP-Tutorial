<?php

// function fruit($name, $color='red'){
//     echo "this is $name and it's color is  $color";
// }

// fruit("apple", 'green');


function user_color($name, $color="black"){
    return "<h1 style='color: $color'>$name</h1>";
}

echo user_color('anik', 'red');


?>