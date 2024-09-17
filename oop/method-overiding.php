<?php

class Teacher{

    public $city = "Dhaka";

    public function next_exam(){
        echo "next exam is maths";
    }

    public function age(){
        echo "my age is 40";
    }

}

 class Student extends Teacher{


    public $city = "kolkata";

    public function age(){
        echo "my age is 20";
    }

 }


// $t1 = new Teacher();
// $t1->next_exam();

$t2 = new  Student();
// $t2->next_exam();
$t2->age();
echo "<br>";
echo $t2->city;


?>