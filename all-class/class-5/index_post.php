<?php

session_start();

// echo"valoe aco";
// print_r($_POST);

// $password = $_POST["password"];
// $name = $_POST["username"];


// echo "Name: $name <br>";
// echo "Password: $password";





if (isset($_POST["submit"])) {
    $year = $_POST["year"];

    if ($year) {
        if (strlen($year) === 4) {
            if (is_numeric($year)) {
                if (($year % 4 === 0) && ($year % 400 === 0 || $year % 100 != 0)) {
                    $_SESSION["success"] = "this is leap year";
                    header("location: index.php");
                } else {
                    $_SESSION["success"] = "this is a not leap year";
                    header("location: index.php");
                }
            } else {
                $_SESSION["error"]  = "This field can't be accept string";
                header("location: index.php");
            }
        } else {
            $_SESSION["error"]  = "invalid number/year";
            header("location: index.php");
        }
    } else {
        $_SESSION["error"]  = "this field can't be null or required";
        header("location: index.php");
    }
    

   


}
