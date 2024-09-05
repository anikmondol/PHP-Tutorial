<?php

// print_r($_REQUEST);

// print_r($_REQUEST['name']);
// print_r($_REQUEST['password']);

foreach ($_REQUEST as $value) {
    echo $value;
    echo "<br>";
}


?>