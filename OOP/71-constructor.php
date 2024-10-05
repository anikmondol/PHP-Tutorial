<?php

class ConstructorDemo{
    public $name = "anik";

    // public function setName(){
    //     return "hello";
    // }

    // public function __construct()
    // {
    //     echo "naik";
    // }

    public function __construct($name)
    {
        echo $this->name = $name;
    }


}


$cd = new ConstructorDemo("anik mondal"); 

// $cd->setName();
// echo $cd->name;


?>