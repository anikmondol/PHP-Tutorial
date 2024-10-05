<?php

class MathOperations{

    public $name = "anik";

    public function sum($a, $b){
        return $a + $b;
    }

    public function getName(){
        return $this->name;
    }

}

$math = new MathOperations();

echo $math->sum(10, 20);
echo "<br>";

$math1 = new MathOperations();

echo $math1->sum(55, 11);
echo "<br>";
echo $math1->getName();


?>