<?php

class User{

    private $name = "a";

    public function __set($name, $value)
    {


        if (property_exists($this, $name)) {
            'ok';
        }else{
            echo "no";
        }

        // echo "$name property can not set with $value";
    }

    public function get_name(){
        echo $this->name;
    }



}

$user = new User();


echo $user->name="anik";

echo "<br>";

$user->get_name();


?>