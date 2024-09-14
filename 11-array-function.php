<?php

$users = ["anik", "perter", "sam", "tony"];
$user = ["name"=> "anik", "age"=>24, "gmail"=> "abc@gamil.com"];

// echo is_array($user);

// if (is_array($user)) {
//     echo "ok";
// } else {
//     echo "no";
// }
// echo count($user);
// echo $user[2];
// unset($user[1]);
// print_r($user);
// array_pop($user);
// print_r($user);
// print_r(array_keys($user));
// echo implode($user);

// $srt = "hello anik";
// echo $srt;
// print_r(explode(' ', $srt));

$same = (array_merge($user, $users));
print_r($same);
echo "<br>";

$date = array_unique($same);

print_r($date);





?>