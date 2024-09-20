<?php

$users = ["anik", 'joy', 'apu', 'shove'];

// array_push($users,11, 41, 7);
// array_pop($users);
// array_pop($users);
// array_pop($users);
array_splice($users, -2);

print_r($users);

?>