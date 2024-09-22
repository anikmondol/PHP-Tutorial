<?php

// $host = "localhost";
// $user = "root";
// $password = null;
// $db_name = "collage";
// $conn = new mysqli($host, $user, $password, $db_name);
// if ($conn->connect_errno) {
//     echo "some error";
//     echo "<br>";
// } else {
//     echo "ok";
//     echo "<br>";
// }


// ----------------------------------------------------------------


$conn = new mysqli("localhost", "root", null, "collage");
$result = $conn->query("show tables")->fetch_all();

print_r($result);



?>