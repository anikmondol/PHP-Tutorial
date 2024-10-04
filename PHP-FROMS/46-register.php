<?php

if (isset($_REQUEST['btn'])) {
  
    foreach ($_REQUEST as $key => $value) {
        echo $key ." is ". $value;
        echo "<br>";
    }


}


?>