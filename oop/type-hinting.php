<?php

// function fruit(string | array $name){
//     print_r($name);
// }

// fruit(["aple"]);


class Fruit{
    public function getName(array $name){
        print_r($name);
    }
}


$name = new Fruit;

$name->getName(["apple"]);



?>