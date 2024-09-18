<?php

class User{
    public $name = "anik";
    private $age = 22;

    public function __get($property)
    {
        echo "$property property is not exist";
    }

}

$user = new User();

echo $user->name;
echo "<br>";
echo $user->age;


?>