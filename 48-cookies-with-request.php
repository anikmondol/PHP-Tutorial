<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter name">
        <br>
        <br>
        <button name="btn" value="set">set</button>
        <br>
        <br>
        <button name="btn" value="display">display</button>
        <br>
        <br>
        <button name="btn" value="delete">delete</button>
    </form>
</body>

</html>


<?php

if (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'set') {
       if ($_POST['user']) {
        $val = $_POST['user'];
        setcookie('user', $val);
        echo "<br>";
        echo "set cookie";
       } else {
        echo "<br>";
        echo 'file input and click set button';
       } 
    }
}

if (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'display') {
        echo "<br>";
       echo $_COOKIE['user'];
    }
}

if (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'delete') {
       setcookie("user", '');
    }
}


?>