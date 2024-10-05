<?php

if (isset($_REQUEST['btn'])) {
    echo "user name is " . $_REQUEST['name'];
    echo "<br>";
    echo "<br>";
    echo "user email is " . $_REQUEST['email'];
    echo "<br>";
    echo "<br>";
    echo "user password is " . $_REQUEST['password'];
    echo "<br>";
    echo "<br>";
    echo "user skills is " . implode(" , ", $_REQUEST['skills']);
    echo "<br>";
    echo "<br>";
    echo "user skills is " . $_REQUEST['gender'];
    echo "<br>";
    echo "<br>";
    echo "user skills is " . $_REQUEST['city'];
    echo "<br>";
    echo "<br>";
    echo "user skills is " . $_REQUEST['bio'];
    echo "<br>";
    echo "<br>";




} else {
    echo "sorry";
}
