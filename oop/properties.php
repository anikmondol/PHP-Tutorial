<?php

class Properties{

    public $name = "anik";

    public function getName(){
        return $this->name;
    }

    public function updateName(){
        return $this->name = "anik mondal";
    }

    public function diyamic($name){
        return $this->name = $name;
    }

}

$p1 = new Properties();

// echo $p1->name;
echo $p1->getName();
echo "<br>";
echo $p1->updateName();
echo "<br>";
echo $p1->diyamic("joy");
?>