<?php

if (isset($_REQUEST['btn'])) {
    foreach ($_REQUEST as $key => $value) {
        // echo $value;
        echo "User ". $key ." => ". $value;
        echo "<br>";
    }
}

?>