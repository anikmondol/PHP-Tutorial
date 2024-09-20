<?php

$user = ['name'=>"anik", "age"=>22, "email"=>"abc@gmail.com"];

$user_json = json_encode($user);

// echo $user_json;

$item = json_decode($user_json, true);

print_r($item);

?>