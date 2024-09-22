<?php

class Teacher{

    public $name = "joy";

    public function next_exam(){
        echo "next exam is maths";
    }

}


class Students extends Teacher{

    public $name = "joy saker";

    public function next_exam(){
        echo "next exam is English";
    }



}


$cd = new Teacher();

$cd->next_exam();
echo "<br>";
echo $cd->name;

echo "<br>";
echo "<br>";

$cd1 = new Students();

$cd1->next_exam();
echo "<br>";
echo $cd1->name;



?>