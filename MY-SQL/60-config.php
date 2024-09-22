<?php

// $conn = new mysqli("localhost", "root", null, "collage");
// $result = $conn->query("show tables")->fetch_all();
// print_r($result);

try{
    $conn = new PDO("mysql:host=localhost;dbname=collage", "root", null);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo "show error". $err;
}


?>