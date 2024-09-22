<?php

abstract class Features{

    abstract function details();
    abstract function image();
    abstract function owner();

}


class Upload extends Features{


    public function details()
    {
        echo "details";
    }

    public function image()
    {
        echo "image";
    }
    public function owner()
    {
        echo "owner";
    }

}


$u = new Upload();

$u->image();

?>