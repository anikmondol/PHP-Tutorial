<?php

$students = array(
    array("name" => "anik", "class" => "simt"),
    array("name" => "apu", "class" => "pkd"),
    array("name" => "joy", "class" => "istt")
);

// echo "<pre>";
// print_r($student);

// foreach($students as $key => $value){
//     // print_r($value);
//     foreach ($value as $k => $v) {
//         echo $v . "<br>";
//     }
// }


foreach ($students as $key => $value) {
    foreach ($value as $k => $v) {
        echo "<b>" . ucwords($k) . "</b> : " . $v . "<br>";
    }
}


?>