<?php

$path = './';
$items = scandir($path);
$items = array_diff($items, array(".",".."));

foreach ($items as $item) {

    echo "<a href='./$item'>$item</a>";
    echo "<br>";
}


?>