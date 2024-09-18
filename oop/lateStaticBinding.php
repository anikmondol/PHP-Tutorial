<?php

class CountrySale{
    static public $total_sale = 100;
    public function get_total_sale(){
        echo static::$total_sale;
    }

    public function get_are_name(){
        static::areName();
    }

    static function areName(){
        echo "india";
    }

}

class CitySale extends CountrySale{
    static public $total_sale = 50;

    static function areName(){
        echo "bangladesh";
    }

}

$city = new CitySale();

$city->get_total_sale();
echo "<br>";
$city->areName();
echo "<br>";
$city->get_are_name();



?>