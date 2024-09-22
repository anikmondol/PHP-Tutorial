<?php

class Honda{

    static public $name = 2;

    static function company_name(){
        echo "honda";
    }

}


// $t1 = new Honda();


Honda::company_name();
echo "<br>";
echo Honda::$name;



?>