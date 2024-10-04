<?php

// $users = array("anik", "joy", "roy");
$users =  ["anik", "joy", "roy"];

// print_r($users);

// echo $users[2];


for ($i=0; $i < count($users); $i++) { 
    echo "<h4 style='color:red'>".$users[$i]."</h4>";
    echo "<br>";
}


?>