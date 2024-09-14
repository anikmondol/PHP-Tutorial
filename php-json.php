<?php

// $user = ["name" => "anik", "age" => 24, "email"=> "anik558363@gmail.com"];
// $user_json = json_encode($user);

// print_r($user_json);
// print_r($user);

$date= '{"name":"anik","age":24,"email":"anik558363@gmail.com"}';
$user = json_decode($date, true);
print_r($user);

?>