<?php

class CountrySale{
    static public $totalSale = 1000;

    
    public function getTotalSale(){
        echo static::$totalSale;
    }

    public function getArea(){
        static::areName();
    }

    static public function areName(){
        echo "india";
    }

}


class CitySale extends CountrySale{
    static public $totalSale = 500;

    static public function areName(){
        echo "kolkata";
    }

}

$city1 = new CountrySale();

$city1->getTotalSale();

echo "<br>";

$city = new CitySale();

$city->getTotalSale();

echo "<br>";

$city->getArea();


?>