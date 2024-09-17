<?php

class constructorDemo{

    // public function setName(){
    //     return "hello";
    // }

    public $name;
    

    public function __construct($name)
    {
        // echo "__constructor called";
        $this->name = "anik";
    }

    public function display(){
        echo $this->name;
    }


}


$cd = new constructorDemo("anik");

// echo $cd->setName();

echo $cd->display();

?>