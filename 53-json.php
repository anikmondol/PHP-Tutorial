<?php

$user = ["name"=>"anik", "age"=>24, "email"=>"abc@gmail.com"];

$user_json = json_encode($user);
$user_array = json_decode($user_json, true);

print_r($user_array);

?>