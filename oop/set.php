<?php

class User{

    private $name = "ritu";

    function __set($property, $value){
        // echo "$property property can not $value";
        if (property_exists($this,$property)) {
        //    echo true;
        $this->$property=$value;
        } else {
            echo false;
        }
        
    }

    function getName(){
        echo $this->name;
    }

}

$user = new User();

$user->name="anik";
echo "<br>";
$user->getName();
$user->getName();



?>