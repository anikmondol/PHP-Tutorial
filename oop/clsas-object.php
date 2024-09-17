<?php

class MathOperations{


    public $name = 50;


    public function sum($a, $b){
        return $a + $b;
    }

    public function sub($a, $b){
        return $a - $b;
    }

}

$maths = new MathOperations();

// echo $maths->sum(20, 20);
// echo "<br>";
// echo $maths->sum(2, 2);
// echo "<br>";
// echo $maths->sum(70, 55);
// echo "<br>";

$maths1 = new MathOperations();

echo $maths1->sub(100, 20);


?>