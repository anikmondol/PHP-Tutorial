<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user_name" placeholder="enter user name">
        <br>
        <br>
        <button name="button" value="set">Set Cookies</button>
        <br>
        <br>
        <button name="button" value="display">Display Cookies</button>
        <br>
        <br>
        <button name="button" value="delete">Delete Cookies</button>
    </form>
</body>
</html>


<?php 

if (isset($_POST['button'])) {
    if ($_POST['button'] == "set") {
        $val = $_POST['user_name'];
        setcookie("user_name", "$val");
        echo "cookie is set";
     }

     if ($_POST['button'] == "display") {
        if (isset($_COOKIE['user_name'])) {
            echo $_COOKIE['user_name'];
        }
     }

     if ($_POST['button'] == "delete") {
        if (isset($_COOKIE['user_name'])) {
            setcookie('user_name', '', -1);
        }
     }


}


?>