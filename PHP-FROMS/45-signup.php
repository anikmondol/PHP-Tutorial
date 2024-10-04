<?php 

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "User name is $name";
    echo "<br>";
    echo "User email is $email";
    echo "<br>";
    echo "User password is $password";
    echo "<br>";
}


// print_r($_POST);

?>