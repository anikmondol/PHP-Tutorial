<?php

class Teachers{

    public $city = "dhaka";

    public function nextExam(){
        echo "next exam is maths";
    }

    public function age(){
        echo "my age is 40";
    }

}

class Student extends Teachers{
    public $city = "kolkata";
    public function age(){
        echo "my age is 20";
    }
}


$t1 = new Teachers();

// $t1->nextExam();
// echo "<br>";


$s1 = new Student();

// $s1->nextExam();
$s1->age();
echo "<br>";

echo $s1->city;
echo "<br>";
$t1->age();


?>