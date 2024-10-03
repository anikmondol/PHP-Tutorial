<?php

// function sum(){
//     echo 10 + 30;
// }

// sum();

// function sum($a, $b){
//     echo $a + $b;
//     echo "<br>";
// }

// sum(10, 22);
// sum(10, 212);
// sum(10, 222);

function user_date($name, $age, $city, $color = "gray"){
    echo "<h1 style='color: $color '> User name is $name </h1>";
    echo "<h1 style='color: $color '> User age is $age </h1>";
    echo "<h1 style='color: $color '> User city is $city </h1>";

}


user_date("anik", 24, "dhaka", 'red');

echo "<br>";

user_date("anik", 24, "dhaka", 'green');

echo "<br>";

user_date("anik", 24, "dhaka");


?>