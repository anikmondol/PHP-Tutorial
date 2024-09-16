<?php

$host = 'localhost';
$user = 'root';
$password = null;
 
$conn = new PDO("mysql:host=$host;dbname=collage",$user,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



?>