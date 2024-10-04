<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter user name">
        <br>
        <br>
        <button name="set">Set Session</button>
        <button name="display">Display Session</button>
        <button name="delete">Delete Session</button>
    </form>
</body>
</html>


<?php

session_start();

if (isset($_REQUEST['set']) == "set") {
    echo "<br>";
     $val = $_POST['user'];
    $_SESSION['user'] = $val;
    echo "session set";
}

if (isset($_REQUEST['display']) == "display") {
    echo "<br>";
   echo $_SESSION['user'];
}


if (isset($_REQUEST['delete']) == "delete") {
    session_unset();
}




?>