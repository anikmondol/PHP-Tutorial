<?php




?>


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

session_start();

if (isset($_REQUEST['btn'])) {
    if ($_POST['btn'] == 'set') {
        if ($_POST['user']) {
            $val = $_POST['user'];
            $_SESSION['user'] = $val;
            echo "<br>";
            echo "session set";
        }else{
            echo "<br>";
            echo "sorry";
        }
       

    }

    if ($_POST['btn'] == 'display') {
        echo "<br>";
       echo $_SESSION['user'];

    }
    if ($_POST['btn'] == 'delete') {
        echo "<br>";
       session_destroy();

    }

}



?>