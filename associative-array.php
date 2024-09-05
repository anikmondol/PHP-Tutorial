<?php

$student = array(
    "name" => "John",
    "age" => 20,
    "grade" => "A"
);

// foreach ($student as $key => $value) {
//     echo $key."<br>";
// }

foreach($student as $key => $value):
    echo $key ." = ". $value ."<br>";
endforeach;


?>