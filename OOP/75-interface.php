<?php

interface Features{
    public function image();
    public function details();
    public function owner();
}

class Products implements Features{
    public function image()
    {
        return "image";
    }

    public function details()
    {
        return "details";
    }
    public function owner()
    {
        return "owner";
    }
}

$products = new Products();

echo $products->image();


?>