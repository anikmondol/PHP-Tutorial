<?php

$host = 'localhost';
$user = 'root';
$password = null;

try{
    $conn = new PDO("mysql:host=$host;dbname=collage",$user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'OK';
}catch(PDOException $err){
    echo "error" . $err->getMessage();
}

echo "<br>";

$result = $conn->query('show tables');

while ($row = $result->fetch(PDO::FETCH_NUM)) {
   print_r($row);
}


?>