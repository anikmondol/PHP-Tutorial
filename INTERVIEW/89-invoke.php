<?php

class User{
    
    public function getName(){
        echo "my name is  anik";
    }

    public function __construct()
    {
        echo "this is a construct";
        echo "<br>";
    }


}


$user = new User();

$user->getName();

$user;

?>