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
        <button name="set">Set Cookie</button>
        <button name="display">Display Cookie</button>
        <button name="delete">Delete Cookie</button>
    </form>

</body>

</html>


<?php

if (isset($_POST["set"]) == "set") {
    $user = $_POST["user"];
    if (setcookie("user", $user, time()+(86400))) {
        echo "<br>";
      echo "cookie is set";
    }else{
        echo "<br>";
        echo "cookie is not set";
    }
}

if (isset($_POST["display"]) == "display") {
    echo "<br>";
   print_r($_COOKIE["user"]);
}

if (isset($_POST["delete"]) == "delete") {
    echo "<br>";
    setcookie("user", "");
}


?>