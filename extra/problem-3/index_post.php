<?php

session_start();


if (isset($_POST["submit"])) {
    $value = $_POST["value"];
    $random_value = random_int(1, 6);

    if($value == $random_value){
        $_SESSION["win"] =  "You have win";
        header("location: index.php");
    }else{
        $_SESSION["loss"] = "you have loss";
        header("location: index.php");
    }

}

?>