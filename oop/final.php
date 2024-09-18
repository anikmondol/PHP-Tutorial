<?php

// final class Honda{


// }


// class Cars extends Honda{

// }

// $car = new Cars();


class Honda {
   final public function companyName(){
        echo "Honda";
    }
}

class Cars extends Honda{
    public function companyName(){
        echo "Honda City";
    }
}

$car = new Cars();

$car->companyName();





?>