<?php
session_start();

$name_val = false;
$email_val = false;
$password_val = false;
$c_password_val = false;

if (isset($_POST["submit"])) {


    // name validation 
    $name = $_POST["name"];
    $name = trim($_POST["name"]);
    $name = preg_replace('/\s+/', ' ', $name);
    $name = str_replace(' ', '', $name);

    if (!$name) {
        $_SESSION["name_error"] = "Name Field is Required";
        header("location: register.php");
    } elseif (!ctype_alpha($name)) {
        $_SESSION["name_error"] = "we can't use any numerical character";
        header("location: register.php");
    } elseif (strlen($name) >= 30) {
        $_SESSION["name_error"] = "we can't use any 30 length character";
        header("location: register.php");
    }else{
        $name_val = true;
    }

    // email validation
    $email = $_POST["email"];
    $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    if (!$email) {
        $_SESSION["email_error"] = "Email Field is Required";
        header("location: register.php");
    }elseif(!preg_match($email_regex, $email)){
        $_SESSION["email_error"] = "invalid email provide!!!";
        header("location: register.php");
    }else{
        $email_val = true;
    }





     // password validation
    $password = $_POST["password"];

    // email regex
    $password_regex_length = '/^(?=\S{8,})/';
    $password_regex_uppercase = '/^(?=\S*[A-Z])/';
    $password_regex_lowercase = '/^(?=\S*[a-z])/';
    $password_regex_number = '/^(?=\S*[\d])/';
    $password_regex_special = '/^(?=\S*[\W])/';




    if (!$password) {
        $_SESSION["password_error"] = "Password Field is Required";
        header("location: register.php");
    }elseif(!preg_match($password_regex_length, $password)){
        $_SESSION["password_error"] = "Password must be minimum 8 character length";
        header("location: register.php");
    }elseif(!preg_match($password_regex_uppercase, $password)){
        $_SESSION["password_error"] = "Password must be at least one uppercase!!";
        header("location: register.php");
    }elseif(!preg_match($password_regex_lowercase, $password)){
        $_SESSION["password_error"] = "Password must be at least one lowercase!!";
        header("location: register.php");
    }elseif(!preg_match($password_regex_special, $password)){
        $_SESSION["password_error"] = "Password must be at least one special character!!";
        header("location: register.php");
    }elseif(!preg_match($password_regex_number, $password)){
        $_SESSION["password_error"] = "Password must be minimum on number!!!";
        header("location: register.php");
    }else{
        $password_val = true;

    }



    // confirm password validation
    $c_password = $_POST["c_password"];

    if (!$c_password) {
        $_SESSION["confirm_password_error"] = "Confirm Password Field is Required";
        header("location: register.php");
    }elseif($c_password != $password){
        $_SESSION["confirm_password_error"] = "Confirm Password credential doesn't match";
        header("location: register.php");
    }else{
        $c_password_val = true;

    }

    if ($name_val && $email_val && $password_val && $c_password_val) {
        header("location: home.php");
    }
    

}


?>
