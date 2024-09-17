<?php

class User{

    public function login($name){
        echo "$name login";
    }

}



class Student extends User{
    public function get_name(){
        return "anik";
    }

}

class Teacher  extends User{
    public function get_name(){
        return "anik mondal";
    }
}


$cd = new Student();
$cd->login("student");
echo "<br>";
echo $cd->get_name();
echo "<br>";
echo "<br>";

$cd1 = new Teacher();
$cd1->login("Teacher");
echo "<br>";
echo $cd1->get_name();



?>