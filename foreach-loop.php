<?php

$users = ["anik", "apu", "joy", 11, "shove"];

// foreach ($users as $user) {
//     // echo "$user <br>";
//     if ($user == 11) {
//         continue;
//     }
//     echo "<h1>$user</h1>";
//     // if ($user == "joy") {
//     //     break;
//     // }
// }

foreach($users as $user):
    echo $user. "<br>";

endforeach;



?>