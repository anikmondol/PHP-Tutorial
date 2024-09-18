<?php

if (isset($_POST['btn'])) {
    class User
    {
        public function getName($name)
        {
            echo "User Name is $name";
        }
    }

    $user = new User();

    $user->getName($_POST['user']);
}else{
    
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
        <input type="text" name="user" placeholder="Enter User Name">
        <button name="btn">Click me</button>
    </form>
</body>

</html>