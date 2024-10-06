<?php

class ConstantDemo{
    protected const collageName = "IET collage";

    public function getCollageName(){
    //    return self::collageName;
    // return ConstantDemo::collageName;
    }
}


class chileDemo extends ConstantDemo{
    public function name(){
        echo self::collageName;
    }
}


$t1 = new ConstantDemo();

// echo $t1::collageName;

// echo ConstantDemo::collageName;
// echo $t1->getCollageName();


$t2 = new chileDemo();

$t2->name();


?>