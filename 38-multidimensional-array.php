<?php

$users = [
    [1, "anik", 'dhaka', "abc@gmail.com"],
    [2, "sam", 'delhi', "sam@gmail.com"],
    [2, "joy", 'kolkata', "joy@gmail.com"]
];

// echo "<pre>";

// print_r($users);

// foreach ($users as $values) {
//     foreach ($values as $value) {
//         echo $value;
//         echo "<pre>";
//     }
// }


for ($i = 0; $i < count($users); $i++) {
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<pre>";
        echo $users[$i][$j];
    }
}
