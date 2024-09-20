<?php

$user_details = ['name' => "anik", "age" => 20, "city" => 'dhaka', "email" => "abc@gamil.com", "state" => "up"];


// echo $user_details['name'];
// echo "<br>";
// echo $user_details['age'];
// echo "<br>";
// echo $user_details['city'];
// echo "<br>";
// echo $user_details['state'];

// foreach ($user_details as $user) {
//     echo $user;
//     echo "<br>";
// }

foreach ($user_details as $value):
    echo $value;
    echo "<br>";

endforeach;
