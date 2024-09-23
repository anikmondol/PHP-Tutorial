<?php

class Company{

    public function get_name(){
        echo "get name";
        return $this;
    }    

    public function get_price(){
        echo 1000;
        return $this;
    }  
 
    public function get_Emp(){
        echo 1000;
    }  

}

$name = new Company();

$name->get_name()->get_price()->get_Emp();
echo "<br>";
// $name->get_price();

?>