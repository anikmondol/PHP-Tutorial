<?php

class User{
    public function login($name){
        echo "$name login";
    }
}


class Students extends User{

   

}

class Teacher extends User{

}



$cd = new Students();
$cd->login("students");
echo "<br>";


$cd1 = new Teacher();
$cd1->login("teacher");


?>