<?php


$users = [
    [1,"anil","nodia","abc@gmail.com"],
    [2,"sam","delhi","sam@gmail.com"],
    [3,"peter","gurugram","peter@gmail.com"],
];

// foreach ($users as $key => $value) {
//    foreach ($value as $a => $c) {
//     echo $c;
//     echo "<br>";
//    }
// }


// echo "<pre>";
// print_r($users);
// echo"<pre>";


for ($i=0; $i < count($users); $i++) { 
    // print_r($users[$i]);
    // echo"<br>";

    for ($j=0; $j < count($users[$i]); $j++) { 
       echo $users[$i][$j];
       echo "<br>";
    }
}


?>