<?php

// class Honda{

// }


// class Cars extends Honda{

// }


// $car = new Honda();


class Honda{
    final public function companyName(){
        echo "honda";
    }
}


class Cars extends Honda{
    // public function companyName(){
    //     echo "honda city";
    // }
}

$car = new Cars();

$car->companyName();




?>