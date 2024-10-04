<?php

$path = "PROGRAM-FILE";
$items = scandir($path);
$files = array_diff($items, array('..', '.'));

foreach ($files as $key => $value) {
    echo "<a href=./PROGRAM-FILE/$value> $value </a>";
    echo "<br>";
}



?>