<?php

try{

    $conn = new PDO("mysql:host=localhost;dbname=collage","root",null);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(ErrorException $err){
    echo "some error". $err;
}


?>