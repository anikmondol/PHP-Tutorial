<?php

class CountrySale{

    static public $total_sale = 1000;

    public function getTotalSale(){
        echo static::$total_sale;
    }

}

class CitySale extends CountrySale{

    static public $total_sale = 50;

  

}


// CitySale::getTotalSale();

$city = new CitySale();

$city->getTotalSale();





?>