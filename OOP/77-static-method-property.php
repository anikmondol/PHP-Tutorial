<?php

class Honda
{
    //    public function companyName(){
    //     echo "honda";
    //    }


    static $name = "anik";

    static function companyName()
    {
        // echo "honda";
        echo self::$name;
    }

}


// $honda = new Honda();

// $honda->companyName();

Honda::companyName();

// echo Honda::$name;
