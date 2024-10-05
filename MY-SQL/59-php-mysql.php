<?php

$host = "localhost";
$user_name = "root";
$password = null;
$database = "collage";

$conn = new mysqli($host, $user_name, $password, $database);


if ($conn->connect_error) {
    die("some error". $conn->connect_error);
}

echo "connect successfull";
echo "<br>";

$result = $conn->query("show tables")->fetch_all();

print_r($result);


?>