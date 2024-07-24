<?php

session_start();


if (isset($_POST["submit"])) {
    $value = $_POST["value"];

    // var_dump($is_numeric($value));

    if (is_numeric($value)) {
        switch (true) {
            case ($value <= 100 && $value >= 80):
                $_SESSION["ok"] = "you got A+";
                header("location: index.php");
                break;


            case ($value < 80 && $value >= 70):
                $_SESSION["ok"] = "you got A";
                header("location: index.php");
                break;


            case ($value < 70 && $value >= 60):
                $_SESSION["ok"] = "you got A-";
                header("location: index.php");
                break;

            case ($value < 60 && $value >= 50):
                $_SESSION["ok"] = "you got B";
                header("location: index.php");
                break;
            case ($value < 50 && $value >= 40):
                $_SESSION["ok"] = "you got C";
                header("location: index.php");
                break;

            case ($value < 40 && $value >= 33):
                $_SESSION["ok"] = "you got D";
                header("location: index.php");
                break;

            case ($value < 33 && $value >= 0):
                $_SESSION["ok"] = "you got F";
                header("location: index.php");
                break;


            default:
            $_SESSION["error"] = "Marks will be 0-100";
            header("location: index.php");
                break;
        }
    } else {
        $_SESSION["error"] = "please enter valid number";
        header("location: index.php");
    }
}
