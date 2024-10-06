<?php

class User{

    public $name = "anik";
    private $age = 55;

    public function __get($name)
    {
        echo "$name property is not exist";
    }



}


$user = new User();

echo $user->name;
echo "<br>";
echo $user->age;

?>