<?php

class Properties{

    // public, private, protected

    public $name = "joy";

    public function get_name(){
        return $this->name;
    }

    public function update_name(){
        return $this->name = "anik";
    }




}



$p1 = new Properties();

echo $p1->name;
echo "<br>";
echo $p1->get_name();
echo "<br>";
echo $p1->update_name();



?>