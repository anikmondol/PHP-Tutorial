<?php

class ConstantDemo{

    const name = "anik";
    protected const age = 24;

    public function get_name(){
        return self::name;
        echo ConstantDemo::name;
    }

}


class Chile extends ConstantDemo{
    public function get_age(){
        return self::age;
    }
}

$t1 = new ConstantDemo();
echo $t1->get_name();

// echo ConstantDemo::name;

echo "<br>";

$t2 = new Chile();
echo $t2->get_age();





?>