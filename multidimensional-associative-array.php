<?php

$users = [
    ["id"=>1,"name"=>"anik","city"=>"Dhaka","age"=>24],
    ["id"=>1,"name"=>"sam","city"=>"noida","age"=>27],
    ["id"=>1,"name"=>"apu","city"=>"delhi","age"=>22]
];

// print_r($users[1]);

echo "<table border=1>";

foreach ($users as $key => $value) {
    echo "<tr>";
    foreach ($value as $key => $user) {
    //    echo $key ." = ". $user;
    //    echo "<br>";
    echo "<td>";
    echo $key ." = ". $user;
    echo"</td>";
    }
    echo "<tr>";
}
 echo "<table/>";

?>