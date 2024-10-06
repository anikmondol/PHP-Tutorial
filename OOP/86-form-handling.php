<?php

if (isset($_REQUEST['btn'])) {

    class User{


        public function getName($a){
            echo "User name is $a";
        }

    }

    $t1 = new User();

    $t1->getName($_REQUEST['name']);


}

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
        <input type="text" name="name" placeholder="enter name">
        <br>
        <br>
        <button name="btn" type="submit">Click Me</button>
    </form>
</body>
</html>