<?php


try{

    $conn = new PDO("mysql:host=localhost;dbname=collage",'root',null);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect done";

}catch(PDOException $err){
    echo "error".$err->getMessage();
}

echo "<br>";
$result = $conn->query("show tables")->fetch(PDO::FETCH_NUM);

print_r($result);


?>