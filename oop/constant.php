<?php

// class Constant {

// const name = "anik";

// public function get_collage(){
// //   echo self::name;
// echo Constant::name;
// }

// }

// echo Constant::name;

// echo "<br>";

// $t1 = new Constant();

// $t1->get_collage();


class Constant{
    protected const name = "anik";
}

class ank extends Constant{

    function getName(){
        echo Constant::name;
    }

}

$t1 = new ank();

$t1->getName();



?>