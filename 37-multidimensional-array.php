<?php

$users = [

    [1, "anik", "dhaka", "abc@gmail.com"],
    [2, "roy", "kolkata", "extra@gmail.com"],
    [2, "shove", "delhi", "sh@gmail.com"],

];


for ($i=0; $i < count($users); $i++) { 
    for ($j=0; $j < count($users[$i]); $j++) { 
        echo $users[$i][$j];
        echo "<br>";
    }
}


// foreach ($users as $key => $values) {
//     foreach ($values as $key => $value) {
//         echo $value;
//         echo "<br>";
//     }
// }

?>