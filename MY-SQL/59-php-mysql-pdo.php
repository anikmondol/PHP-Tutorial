<?php

try{

    $conn = new PDO("mysql:host=localhost;dbname=collage", 'root', null);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "ok";

}catch(PDOException $err){
    echo "error".$err->getMessage();
}

$result = $conn->query("show tables")->fetch(PDO::FETCH_NUM);

print_r($result);



?>