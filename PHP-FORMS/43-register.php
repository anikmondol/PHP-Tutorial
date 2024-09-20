<?php

if (isset($_REQUEST['btn'])) {

    foreach ($_REQUEST as $value) {
        echo $value;
        echo "<br>";
    }
}
