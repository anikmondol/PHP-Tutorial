<?php

if (isset($_REQUEST['btn'])) {
   $name = $_REQUEST['name'];


  class User{
    public function getName($name){
       return $name; 
    }
  }
}

$n = new User();

echo $n->getName($name);


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
    <button name='btn'>Click me</button>
    </form>
</body>
</html>