<?php

$users = [
    [ "name" => "anik", "age" => 20, "city" =>"dhaka"],
    [ "name" => "joy",  "age"=> 22,  "city"=> "delhi"],
    [ "name" => "apu",  "age"=> 21,  "city"=> "kolkata"],

];

foreach ($users as $key => $values) {
   foreach ($values as $keys => $value) {
    echo "<pre>";
    echo $keys ." == ". $value;
   }
}

?>