<?php

class User{

    private $name = "anik";

    function __set($name, $value)
    {
        // echo "$name property can not set with $value";
        if (property_exists($this, $name)) {
            $this->$name=$value;
        } else {
            echo "no";
        }
        
    }

    public function getName(){
        echo $this->name;
    }

}


$user = new User();

$user->getName();
echo "<br>";
$user->name="anik mondal";
$user->getName();


?>