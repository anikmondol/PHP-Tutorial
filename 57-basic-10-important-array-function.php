<?php

$user = [11, 2, 4, 70, 2, 44];
$user1 = [11, 2, 4, 70, 2, "anik"];

// echo is_array($user);
// echo count($user);
// unset($user[2]);
// array_push($user, "anik", "joy", "shove");
// array_pop($user);
// print_r(array_values($user));
// echo implode($user);


// $str = "hello anik. how are you";

// print_r(explode(" ", $str));

// print_r($user);

$user2 = array_merge($user, $user1);

// print_r($user2);
// echo "<br>";

$user3 = array_unique($user2);
 
print_r($user3);




?>